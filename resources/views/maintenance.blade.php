<div class='error'>
  <img src="https://exportersway.com/companylogo/exportersway-logo.png" style="width:25%">
<!--   <h1 class='code'>404</h1> -->
  <h2 class='desc'>Sorry for the inconvenience but we're performing some maintenance at the moment</h2>
  <p>
    We'll be back online shortly!
  </p>
  <a href="{{url('/')}}">
    Navigate to Homepage
  </a>
</div>
<style>
    
body {
  font-family: 'Arvo', serif;
  background: #ABCDEF;
  display: flex;
  align-items: center;
  justify-content: center;
  min-height: 90vh;
  transition: 1s;
}
.error {
  color: #20293F;
  text-align: center;
  animation: fadein 1.2s ease-in;
}
.error > .code {
  font-size: 10.5em;
  text-shadow:  0 6px 1px rgba(0,0,0,0.0980392) , 0 0 5px rgba(0,0,0,0.0980392) , 0 1px 3px rgba(0,0,0,0.298039) , 0 3px 5px rgba(0,0,0,0.2) , 0 5px 10px rgba(0,0,0,0.247059) , 0 10px 10px rgba(0,0,0,0.2) , 0 20px 20px rgba(0,0,0,0.14902) ;
  margin: 0;
}
.error > .desc {
  text-shadow: 0px 3px 5px rgba(0,0,0,0.5), 0px 6px 20px rgba(0,0,0,0.3);
  font-weight: 400;
}
@keyframes fadein {
  0% {
    margin-top: -50px;
    opacity: 0;
  }
  50% {
    opacity: 0.5;
  }
  100% {
    opacity: 1;
  }
}
</style>
