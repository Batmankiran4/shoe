<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <title>Dashboad admin</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
  <link rel="stylesheet" href="test.css">
  <link rel="stylesheet" href="test2.css">
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="js/jquery.min.js"></script>
  <script src="js/jautocalc.js"></script>
  <script src="js/jautocal.js"></script>
  <script src="js/script.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- <script src="js/jquery-3.5.0.min.js"></script> -->

<script src="https://code.jquery.com/jquery-3.5.0.js" integrity="sha256-r/AaFHrszJtwpe+tHyNi/XCfMxYpbsRg2Uqn0x3s2zc=" crossorigin="anonymous"></script>

<script>
    $(document).ready(function(){
        $("#price, #qty").keyup(function(){


        var total=0;
        var x=Number($("#price").val());
        var y=Number($("#qty").val());
        var total=x*y;

        $('#total').val(total);
    });
         });
</script>

<script>
    $(document).ready(function(){
        $("#price1, #qty1").keyup(function(){


        var total1=0;
        var x1=Number($("#price1").val());
        var y1=Number($("#qty1").val());
        var total1=x1*y1;

        $('#total1').val(total1);
    });
         });
</script>


<script>
    $(document).ready(function(){
        $("#price2, #qty2").keyup(function(){


        var total2=0;
        var x2=Number($("#price2").val());
        var y2=Number($("#qty2").val());
        var total2=x2*y2;

        $('#total2').val(total2);
    });
         });
</script>


<script>
    $(document).ready(function(){
        $("#price3, #qty3").keyup(function(){


        var total3=0;
        var x3=Number($("#price3").val());
        var y3=Number($("#qty3").val());
        var total3=x3*y3;

        $('#total3').val(total3);
    });
         });
</script>


<script>
    $(document).ready(function(){
        $("#price4, #qty4").keyup(function(){


        var total4=0;
        var x4=Number($("#price4").val());
        var y4=Number($("#qty4").val());
        var total4=x4*y4;

        $('#total4').val(total4);
    });
         });
</script>


<script>
    $(document).ready(function(){
        $("#price5, #qty5").keyup(function(){


        var total5=0;
        var x5=Number($("#price5").val());
        var y5=Number($("#qty5").val());
        var total5=x5*y5;

        $('#total5').val(total5);
    });
         });
</script>

<script>
    $(document).ready(function(){
        $("#price6, #qty6").keyup(function(){


        var total6=0;
        var x6=Number($("#price6").val());
        var y6=Number($("#qty6").val());
        var total6=x6*y6;

        $('#total6').val(total6);
    });
         });
</script>

<script>
    $(document).ready(function(){
        $("#price7, #qty7").keyup(function(){


        var total7=0;
        var x7=Number($("#price7").val());
        var y7=Number($("#qty7").val());
        var total7=x7*y7;

        $('#total7').val(total7);
    });
         });
</script>

<script>
    $(document).ready(function(){
        $("#price8, #qty8").keyup(function(){


        var total8=0;
        var x8=Number($("#price8").val());
        var y8=Number($("#qty8").val());
        var total8=x8*y8;

        $('#total8').val(total8);
    });
         });
</script>

<script>
    $(document).ready(function(){
        $("#price9, #qty9").keyup(function(){


        var total9=0;
        var x9=Number($("#price9").val());
        var y9=Number($("#qty9").val());
        var total9=x9*y9;

        $('#total9').val(total9);
    });
         });
</script>




</head>

<body>


 <?php 
                    if(isset($_SESSION['status']))
                    {
                        ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong></strong> <?php echo $_SESSION['status']; ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php
                        unset($_SESSION['status']);
                    }
                ?>



  <input type="checkbox" id="nav-toggle">
  <div class="asidebar">
      <div class="sidebar-brand">
          <h2><i class="fa fa-car fa"></i><span>Dashbord</span></h2>
      </div>
      <div class="sidebar-menu">
        <ul>
          <li>
                <a href="menu.php">
                  <span><i class='far fa-list-alt'></i></span>
                  <span>Products</span>
                </a>
          </li>
          <li>
                <a href="shoeadd1.php"class="active">
                   <span class="las la-users"></span>
                   <span> Add Products</span>
                </a>
          </li>
          <li>
                <a href="">
                    <span class="las la-receipt"></span>
                    <span> Sales Product</span>
                </a>
            </li>
            <li>
                <a href="">
                    <span class="las la-clipboard-list"></span>
                    <span> option3</span>
                </a>
            </li>
            <li>
                <a href="">
                    <span class="fa fa-refresh "></span>
                    <span> option4</span>
                </a>
            </li>
            <li>
                <a href="login.php">
                    <span><i class='fas fa-user-times'></i></span>
                    <span> Log Out</span>
                </a>
            </li>
        </ul>
    </div>
  </div>
    <div class="main-content">
        <header>
            <h2 style="color: #FF0000;">
                <label for="nav-toggle">
                    <span class="las la-bars"></span>
                </label>
                Dashbord
            </h2>
            <div class="search-wrapper">
                <span class="las la-search"></span>
                <input type="search" placeholder="Search here" />
            </div>
            <div class="user-wrapper">
                <img src="img/2.jpg" width="30px" hight="30px" alt="">
                <div>
                    <h4> Name name</h4>
                    <small>Operator</small>
                </div>
            </div>
        </header>
        <main>
            <div class="cards">
                <div class="card-single">
                    <div>
                        <h1>54</h1>
                        <span>Customers</span>
                    </div>
                    <div>
                        <span class="las la-users"></span>
                    </div>
                </div>
                <div class="card-single">
                    <div>
                        <h1>*</h1>
                        <span>Option</span>
                    </div>
                    <div>
                        <span class="lab la-google-wallet"></span>
                    </div>
                </div>
                <div class="card-single">
                    <div>
                        <h1>*</h1>
                        <span>Option</span>
                    </div>
                    <div>
                        <span class="lab la-google-wallet"></span>
                    </div>
                </div>

            </div>


          <div class="card-body">
              
              <form method="post" action="shoeadd1.php" id="cart">

                <div class="main-form mt-3 border-bottom">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group mb-2">
                                <lebel for="">Prodect name</lebel>
                                <input type="text" name="pname[]" class="form-control"  placeholder="Enter Name">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group mb-2">
                                <lebel for="">Quantity</lebel>
                                <input type="text" name="qty[]" class="form-control" id="qty"  placeholder="Enter Quantity">
                            </div>
                        </div> 
                        <div class="col-md-3">
                            <div class="form-group mb-2">
                                <lebel for="">Price</lebel>
                                <input type="text" name="price[]" class="form-control" id="price"  placeholder="Enter Price">
                            </div>
                        </div>


                          <div class="col-md-3">
                            <div class="form-group mb-2">
                                <lebel for="">Total Price</lebel>
                                
                              <input type="text" name="tprice[]" id="total" class="form-control" readonly="" placeholder="Total Price">

                            </div>
                        </div>





                    </div>
                </div>
                <div class="main-form mt-3 border-bottom">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group mb-2">
                                <lebel for=""></lebel>
                                <input type="text" name="pname[]" class="form-control"  placeholder="Enter Name">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group mb-2">
                                <lebel for=""></lebel>
                                <input type="text" name="qty[]" class="form-control" id="qty1"  placeholder="Enter quantity">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group mb-2">
                                <lebel for=""></lebel>
                                <input type="text" name="price[]" class="form-control" id="price1" placeholder="Enter price">
                            </div>
                        </div>


                                 <div class="col-md-3">
                            <div class="form-group mb-2">
                                <lebel for=""></lebel>
                                
                              <input type="text" name="tprice[]" id="total1" class="form-control"  readonly=""  placeholder="Total Price">

                            </div>
                        </div>


                    </div>
                </div>
                <div class="main-form mt-3 border-bottom">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group mb-2">
                                <lebel for=""></lebel>
                                <input type="text" name="pname[]" class="form-control"  placeholder="Enter Name">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group mb-2">
                                <lebel for=""></lebel>
                                <input type="text" name="qty[]" id="qty2" class="form-control"  placeholder="Enter quantity">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group mb-2">
                                <lebel for=""></lebel>
                                <input type="text" name="price[]" id="price2" class="form-control"  placeholder="Enter price">
                            </div>
                        </div>


                              <div class="col-md-3">
                            <div class="form-group mb-2">
                                <lebel for=""></lebel>
                                
                              <input type="text" name="tprice[]" id="total2" class="form-control" readonly=""  placeholder="Total Price">

                            </div>
                        </div>

                    </div>
                </div>
                <div class="main-form mt-3 border-bottom">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group mb-2">
                                <lebel for=""></lebel>
                                <input type="text" name="pname[]" class="form-control"  placeholder="Enter Name">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group mb-2">
                                <lebel for=""></lebel>
                                <input type="text" name="qty[]" id="qty3" class="form-control"  placeholder="Enter quantity">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group mb-2">
                                <lebel for=""></lebel>
                                <input type="text" name="price[]" id="price3" class="form-control"  placeholder="Enter price">
                            </div>
                        </div>


                            <div class="col-md-3">
                            <div class="form-group mb-2">
                                <lebel for=""></lebel>
                                
                              <input type="text" name="tprice[]" id="total3" class="form-control" readonly=""  placeholder="Total Price">

                            </div>
                        </div>

                    </div>
                </div>
                <div class="main-form mt-3 border-bottom">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group mb-2">
                                <lebel for=""></lebel>
                                <input type="text" name="pname[]" class="form-control"  placeholder="Enter Name">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group mb-2">
                                <lebel for=""></lebel>
                                <input type="text" name="qty[]" id="qty4" class="form-control"  placeholder="Enter quantity">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group mb-2">
                                <lebel for=""></lebel>
                                <input type="text" name="price[]" id="price4" class="form-control"  placeholder="Enter price">
                            </div>
                        </div>


                  <div class="col-md-3">
                            <div class="form-group mb-2">
                                <lebel for=""></lebel>
                                
                              <input type="text" name="tprice[]" id="total4" class="form-control" readonly=""  placeholder="Total Price">

                            </div>
                        </div>

                    </div>
                </div>
                <div class="main-form mt-3 border-bottom">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group mb-2">
                                <lebel for=""></lebel>
                                <input type="text" name="pname[]"  class="form-control"  placeholder="Enter Name">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group mb-2">
                                <lebel for=""></lebel>
                                <input type="text" name="qty[]" id="qty5" class="form-control"  placeholder="Enter quantity">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group mb-2">
                                <lebel for=""></lebel>
                                <input type="text" name="price[]" id="price5" class="form-control"  placeholder="Enter price">
                            </div>
                        </div>


                           <div class="col-md-3">
                            <div class="form-group mb-2">
                                <lebel for=""></lebel>
                                
                              <input type="text" name="tprice[]" id="total5" class="form-control" readonly=""  placeholder="Total Price">

                            </div>
                        </div>


                    </div>
                </div>
                <div class="main-form mt-3 border-bottom">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group mb-2">
                                <lebel for=""></lebel>
                                <input type="text" name="pname[]" class="form-control"  placeholder="Enter Name">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group mb-2">
                                <lebel for=""></lebel>
                                <input type="text" name="qty[]" id="qty6" class="form-control"  placeholder="Enter Quantity">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group mb-2">
                                <lebel for=""></lebel>
                                <input type="text" name="price[]" id="price6" class="form-control"  placeholder="Enter price">
                            </div>
                        </div>

                           <div class="col-md-3">
                            <div class="form-group mb-2">
                                <lebel for=""></lebel>
                                
                              <input type="text" name="tprice[]" id="total6" class="form-control" readonly=""  placeholder="Total Price">

                            </div>
                        </div>


                    </div>
                </div>
                <div class="main-form mt-3 border-bottom">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group mb-2">
                                <lebel for=""></lebel>
                                <input type="text" name="pname[]" class="form-control"  placeholder="Enter Name">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group mb-2">
                                <lebel for=""></lebel>
                                <input type="text" name="qty[]" id="qty7" class="form-control"  placeholder="Enter Quantity">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group mb-2">
                                <lebel for=""></lebel>
                                <input type="text" name="price[]" id="price7" class="form-control" placeholder="Enter price">
                            </div>
                        </div>


                             <div class="col-md-3">
                            <div class="form-group mb-2">
                                <lebel for=""></lebel>
                                
                              <input type="text" name="tprice[]" id="total7" class="form-control" readonly=""  placeholder="Total Price">

                            </div>
                        </div>


                    </div>
                </div>
                <div class="main-form mt-3 border-bottom">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group mb-2">
                                <lebel for=""></lebel>
                                <input type="text" name="pname[]" class="form-control"  placeholder="Enter Name">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group mb-2">
                                <lebel for=""></lebel>
                                <input type="text" name="qty[]" id="qty8" class="form-control"  placeholder="Enter Quantity">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group mb-2">
                                <lebel for=""></lebel>
                                <input type="text" name="price[]" id="price8" class="form-control"  placeholder="Enter price">
                            </div>
                        </div>


                           <div class="col-md-3">
                            <div class="form-group mb-2">
                                <lebel for=""></lebel>
                                
                              <input type="text" name="tprice[]" id="total8" class="form-control" readonly=""  placeholder="Total Price">

                            </div>
                        </div>


                    </div>
                </div>
                <div class="main-form mt-3 border-bottom">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group mb-2">
                                <lebel for=""></lebel>
                                <input type="text" name="pname[]" class="form-control"  placeholder="Enter Name">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group mb-2">
                                <lebel for=""></lebel>
                                <input type="text" name="qty[]" id="qty9" class="form-control"  placeholder="Enter Quantity">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group mb-2">
                                <lebel for=""></lebel>
                                <input type="text" name="price[]" id="price9" class="form-control"  placeholder="Enter price">
                            </div>
                        </div>

                            <div class="col-md-3">
                            <div class="form-group mb-2">
                                <lebel for=""></lebel>
                                
                              <input type="text" name="tprice[]" id="total9" class="form-control" readonly=""  placeholder="Total Price">

                            </div>
                        </div>



                    </div>
                </div>


  <table name="cart">
    
    <tr class="line_items">
       <td><input type="text"  name="pname[]" class="form-control pname"  placeholder="Enter Name" style="width: 170px; margin: 0; padding-right: 5px;"></td>
      <td><input type="text"  name="qty[]" id="qty" class="form-control"  placeholder="Enter Quantity"style="width: 170px;"></td>
      <td><input type="text"  name="price[]"  id="price" class="form-control" placeholder="Enter price" style="width: 170px;"></td>
      <!-- <td>&nbsp;</td> -->
      <td><input type="text" name="tprice[]"  value="" jAutoCalc="{#qty} * {#price}" class="form-control" placeholder="Total Price" ></td>
      <td><button class="row-remove remove">X</button></td>
         
      
    </tr>
    
    <tr>
      <td colspan="99"><button class="row-add">Add Row</button></td>
    </tr>
  </table>


                <div class="paste-new-forms">

                </div>
                <button type="submit" name="submit" class="btn btn-primary">save data</buttton>
                  
              </form>
          </div>
          <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
        <script>
            $(function() {

      function autoCalcSetup() {
        $('form#cart').jAutoCalc('destroy');
        $('form#cart tr.line_items').jAutoCalc({keyEventsFire: true, decimalPlaces: 2, emptyAsZero: true});
        $('form#cart').jAutoCalc({decimalPlaces: 2});
      }
      autoCalcSetup();


      $('button.row-remove').on("click", function(e) {
        e.preventDefault();

        var form = $(this).parents('form')
        $(this).parents('tr').remove();
        autoCalcSetup();

      });

      $('button.row-add').on("click", function(e) {
        e.preventDefault();

        var $table = $(this).parents('table');
        var $top = $table.find('tr.line_items').first();
        var $new = $top.clone(true);

        $new.jAutoCalc('destroy');
        $new.insertBefore($top);
        $new.find('input[type=text]').val('');
        autoCalcSetup();

      });

    });
    
        </script>
        <!-- <div class="addb">
        <a href="javascript:void(0)" class="add-more-form float-inherit btn btn-primary" style="padding-left:38px;padding-right:37px;">Add</a>
        </div> -->
    </main>
   
  </div>
</body>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jautocalc@1.3.1/dist/jautocalc.js"></script>
</html>























<!-- <html>
<head>
  
  
</head>
<body>

</body>
</html> -->