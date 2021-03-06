
<?php
//this document showcases the full range of styles defined for the WithIt brand.
//Note that some styles do not appear in this version of the app.
include 'header.php';
?>
<div class="col-md-12">
<head>
  <meta charset="utf-8">
  <title>Style Guide</title>
</head>
<body>
  <div class="left">
    <h1>COLOR</h1>
  </div>
  <div class="content">
    <div class="row">
    <div class= "col-sm-3 color1">
      <p>HEX #F40643</p>
    </div>
    <div class= "col-sm-3 color2">
      <p class="white">HEX #F567B2</p>
    </div>
    <div class= "col-sm-3 color3">
      <p class="white">HEX #FDDFF2</p>
    </div>
    <div class= "col-sm-3 color4">
      <p class="white">HEX #04DADA</p>
    </div>
    <div class= "col-sm-3 color5">
      <p class="white">HEX #CCFAFA</p>
    </div>
    <div class= "col-sm-3 color6">
      <p class="white">HEX #FFFFFF</p>
    </div>
    <div class= "col-sm-3 color7">
      <p class="white">HEX #000000</p>
    </div>
    <div class= "col-sm-3 color8">
      <p class="white">HEX #808080</p>
    </div>
    <div class= "col-sm-3 color9">
      <p class="white">HEX #D3D3D3</p>
    </div>
    </div>
  </div>
    <div class="left">
      <h1> TYPE </h1>
    </div>
  <div class="content">
    <div class="row">
    <div class= "col-md-12">
    <h1> VIDALOKA </h1>
    <h2> A B C D E F G H I J K L M N O P Q R S T U V W X Y Z
      <br>
        a b c d e f g h i j k l m n o p q r s t u v w x y z
      <br>
        ! @ # $ % ^ * . , ? ( )
      <br>
      <br>
    </h2>
    <h1 class= "Lato"> LATO</h1>
    <h2 class = "Lato"> A B C D E F G H I J K L M N O P Q R S T U V W X Y Z
      <br>
      a b c d e f g h i j k l m n o p q r s t u v w x y z
      <br>
      ! @ # $ % ^ * . , ? ( )
    </h2>
    </div>
    </div>

    <div class="left">
      <h1> TEXT </h1>
    </div>

    <h1> HEADER 1 </h1>
    <h2> Header 2 </h2>
    <h3> Header 3 </h3>
    <h4> Header 4 </h4>
    <h5> Header 5 </h5>
    <br>
      <p class="lead"> p.lead </p>
      <p class="lead">People, even more than things, have to be restored, renewed, revived,
      reclaimed, and redeemed; never throw out anyone.
      </p>
      <p> p</p>
      <p>
        WithIt is a contact manager for smart, savvy, stylish millennial women.
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
        veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
        commodo consequat.
      </p>
    <br>
      <p class="light"> p.light </p>
      <p class="light">
        Get WithIt to keep up with all the people you meet and friends you make.
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
        veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
        commodo consequat.
      </p>
    <br>

    <div class="left">
    <h1> BUTTONS </h1>
    </div>

    <button class="btn btn-sm delete">small button</button>
    <br>
    <br>
    <button class="btn btn-md new">medium button</button>
    <br>
    <br>
    <button class="btn btn-lg large">large button</button>

    <div class="left">
    <h1> LISTS </h1>
    </div>

    <div class = "col-sm-6">
      <h3> ordered list </h3>
        <ol>
          <li>item 1</li>
          <li>item 2</li>
          <li>item 3</li>
          <li>item 4</li>
        </ol>
    </div>
    <div class = "col-sm-6">
      <h3> unordered list </h3>
        <ul>
          <li>item 1</li>
          <li>item 2</li>
          <li>item 3</li>
          <li>item 4</li>
        </ul>
    <br>
    </div>

    <div class="left">
      <h1> FORMS </h1>
    </div>

    <div class="col-lg-8">
      <div class="form-group">
        <label for="contact_first">Form</label>
        <input class="form-control" type="text" name="form" id="contact_first" value="" placeholder="example form text" />
      </div>
    </div>

    <div class="col-lg-8">
    <div class="form-group">
      <label for="contact_state">Select Input</label>
      <select class="form-control" type="text" name="state"  id="contact_state" value="" placeholder="contact state">
        <option>option 1</option>
        <option>option 2</option>
        <option>option 3</option>
        <option>option 4</option>
        <option>option 5</option>
      </select>
    </div>
    </div>

  <!--ideas from http://stackoverflow.com/questions/14404157/multiline-input-form-field-using-bootstrap-->
  <div class="form-group">
    <div class="col-lg-8">
      <label for="formGroupExampleInput">Text Form</label>
      <textarea class="form-control" rows= "3" placeholder="example text form input" required></textarea>
    <br>
    <br>
    <br>
    </div>
    </div>
  </div>
  </div>
</body>

<?php
include 'footer.php';
?>
