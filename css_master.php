<style>
  
  @viewport{
    zoom: 1.0;
    width : extend-to-zoom;
}

@-ms-viewport{
    width: extend-to-zoom;
    zoom:1.0;
}


  @media only screen and (min-width: 320px){
        
      #piechart {

        height : 240px !important;
        width: 670px !important;
      }

      #myChart{

        height: 210px !important;
        width: 320px !important;
        margin-left: -30px !important;
      }
      

        }

        @media only screen and (min-width: 480px){

          #piechart {

        height : 240px !important;
        width: 670px !important;
      }

      #myChart{

        height: 210px !important;
        width: 320px !important;
        margin-left: -30px !important;
      }
      
          

        }

        @media only screen and (min-width: 767px){

        #piechart {

        height : 240px !important;
        width: 670px !important;
      }

      #myChart{

        height: 210px !important;
        width: 320px !important;
        margin-left: -30px !important;
      }
        

        }

        @media only screen and (min-width: 991px){

          #piechart {

        height : 350px !important;
        width: 900px !important;
      }

      #myChart{

        height: 300px !important;
        width: 600px !important;
        margin-left: 100px !important;
      }
          

        }

        @media only screen and (min-width: 1200px){
         #piechart {

        height : 350px !important;
        width: 900px !important;
      }

      #myChart{

        height: 300px !important;
        width: 600px !important;
        margin-left: 100px !important;
      }
          

        }
  
* {
  box-sizing: border-box;
}

body {
  font: 16px Arial;  
}

/*the container must be positioned relative:*/
.autocomplete {
  position: relative;
  display: inline-block;
}

input {
  border: 1px solid transparent;
  background-color: #f1f1f1;
  padding: 10px;
  font-size: 16px;
}

input[type=text] {
  background-color: #f1f1f1;
  width: 100%;
}

input[type=submit] {
  background-color: DodgerBlue;
  color: #fff;
  cursor: pointer;
}

.autocomplete-items {
  position: absolute;
  border: 1px solid #d4d4d4;
  border-bottom: none;
  border-top: none;
  z-index: 99;
  /*position the autocomplete items to be the same width as the container:*/
  top: 100%;
  left: 0;
  right: 0;
}

.autocomplete-items div {
  padding: 10px;
  cursor: pointer;
  background-color: #fff; 
  border-bottom: 1px solid #d4d4d4; 
}

/*when hovering an item:*/
.autocomplete-items div:hover {
  background-color: #e9e9e9; 
}

/*when navigating through the items using the arrow keys:*/
.autocomplete-active {
  background-color: DodgerBlue !important; 
  color: #ffffff; 
}
</style>
