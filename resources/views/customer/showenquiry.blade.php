@extends('customer.navmanu')
@section('maincontent')
<!doctype html>
<html lang="en">

<!--start page wrapper -->
<div class="page-wrapper">
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Your Product</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Enquiry</li>
                    </ol>
                </nav>
            </div>

        </div>
        <!--end breadcrumb-->

        <hr>
        <div class="row ">

                    <div class="col12 col-md-6 col-lg-6 leadcard">
                        <div class="leadheading">
                            <h1>Enquiry</h1>
                        </div>
                        <form action="{{ route('searchenquiry') }}" method="GET">
                            <div class="searchinput">
                                <input type="search" placeholder="Search Product" name="search"
                                    value="{{ request('search') }}">
                                <button type="submit">Search</button>
                            </div>
                        </form>
                        <br>
                        <br>

                        @foreach($enquiry as $enquiryItem)
                        <div style="background-color: #f0f8ff00;
    border-bottom: 1px solid white;">
                            <a class="showTextLink" data-id="{{ $enquiryItem->id }}"
                                data-details="{{ json_encode($enquiryItem) }}" style="cursor: pointer">
                                {{ substr($enquiryItem->massage, 0, strpos($enquiryItem->massage, '<br />')) }}

                            </a>
                        </div>
                        <br>
                        @endforeach


                    </div>

                    <div class="col12 col-md-6 col-lg-6 leadcard">
                        <div class="leadheading" style="background-color: #81160038;">
                            <h1 style="color: white;">View Enquiry</h1>
                        </div>
                        <h5 id="displayText" style="display: none;"></h5>
                    </div>


                </div><!-- end row -->

                <style>
        .lead-date {
            text-align: right;
            color: #000;
            margin-top: 10px;
            font-weight: bolder;
            font-size: 12px;
        }

        .lead-city {
            color: #2a7bb6;
            font-weight: bold;
            margin: 10px 0px 10px 0px;
        }

        .fa-home:before {
            content: "\f015";
        }

        .comp-name {
            font-size: 18px;
            color: #000;
            font-weight: bolder;
            overflow: hidden;
        }

        .lead-list {
            background-color: whitesmoke;
            padding: 8px;
            margin-top: 20px;
            box-shadow: rgba(0, 0, 0, 0.07) 0px 1px 1px, rgba(0, 0, 0, 0.07) 0px 2px 2px, rgba(0, 0, 0, 0.07) 0px 4px 4px, rgba(0, 0, 0, 0.07) 0px 8px 8px, rgba(0, 0, 0, 0.07) 0px 16px 16px;
            border-top: 1px solid silver;
        }

        .leadcard {
            border-radius: 1px solid red;
            text-align: left;
            height: 500px;
            overflow-y: scroll;
            overflow-x: hidden;
        }

        .searchinput button {
            border-radius: 4px;
            background: azure;
            color: #b17676;
            font-weight: 900;
        }

        .searchinput input {
            height: 31px;
            border-radius: 3px;
        }

        .searchinput {
            display: flex;
            justify-content: center;
            text-align: center;
        }

        .innerheading {
            background-color: #fff;
            width: 80%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            height: 150px;
            box-shadow: 0 40px 80px #f1dada;
            border-radius: 14px;
        }



        .leadheading h1 {
            font-size: 24px;
            font-weight: 400;
            font-family: fangsong;
            color: #e4e3e3;
            background-color: #8c680038;
            padding: 12px;
        }
    </style>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
                    integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
                    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

                <script>
                   
                    const showTextLinks = document.querySelectorAll(".showTextLink");
                    const displayText = document.getElementById("displayText");
                    const userCustomerRank = <?php echo json_encode(auth() -> user() -> customer -> rank); ?>;

                    showTextLinks.forEach(link => {
                        link.addEventListener("click", () => {
                            const details = JSON.parse(link.getAttribute("data-details"));
                            let displayedNumber = details.number;
                            let displayedEmail = details.enquiryemail;
                            const massageLines = details.massage.split('<br />');
                            const displayedMassage = massageLines.join('<br />');

                            if (userCustomerRank == 5) {
                                const parts = displayedEmail.split('@');
                                if (parts.length === 2) {
                                    const maskedEmail = `${parts[0].charAt(0)}${'*'.repeat(parts[0].length - 1)}@${parts[1]}`;
                                    displayedEmail = maskedEmail;
                                }
                                displayedEmail = `${displayedEmail.charAt(0)}${'*'.repeat(displayedEmail.length - 1)}`;
                                displayedNumber = `${details.number.charAt(0)}${'*'.repeat(details.number.length - 2)}${details.number.charAt(details.number.length - 1)}`;

                                massageLines.forEach((line, index) => {
                                    if (line.trim().startsWith("COMPANY :")) {
                                        massageLines[index] = "COMPANY : *****";
                                    } else if (line.trim().startsWith("Address :")) {
                                        massageLines[index] = "Address : ****";
                                    }
                                });
                            }

                            displayText.innerHTML = `
            Message: ${massageLines.join('<br />')}<br>
            Details: ${displayedEmail}<br>
            Number: ${displayedNumber}<br>
        `;
                            displayText.style.display = "block";
                        });
                    });


                </script>



        </body>

</html>
@endsection