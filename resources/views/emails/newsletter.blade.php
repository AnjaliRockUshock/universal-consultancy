<html lang="en">

<head>
  <style>
    body {
      font-family: Poppins, sans-serif;
      padding: 20px;
      background: #f1f1f1;
    }

    .container {
      background-color: #000000;
      width: 80%;
      max-width: 600px;
      margin-left: auto;
      margin-right: auto;
    }

    .inner_container {
      background-color: #ffffff;
      padding: 50px;
    }

    header,
    footer {
      text-align: center;
    }

    .email_inner_section {
      padding: 20px 0 50px 0;
    }

    hr {
      height: 5px;
      background-color: brown;
      border-color: brown;
    }

    h1 {
      color: brown;
    }

    .enquiry_submission table {
      text-align: left;
      margin-top: 50px;
    }

    .enquiry_submission table tbody tr th {
      width: 30%;
      vertical-align: top;
    }

    .enquiry_submission th,
    .enquiry_submission td {
      padding: 10px;
      margin: 0;
    }

    .enquiry_submission th {
      color: brown;
      font-weight: 900;
    }

    .enquiry_submission td {
      font-weight: 100;
    }

    .email_footer {
      font-size: 10px;
      color: #ffffff;
      padding: 20px 0;
    }

    .email_footer a {
      color: #ffffff;
      text-decoration: none;
    }

    @media only screen and (max-width:500px) {

      .enquiry_submission th,
      .enquiry_submission td {
        display: block;
        width: 100% !important;
      }
    }
  </style>
  <!--  HEAD    -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Enquiry Form</title>
</head>
<!-- BODY   -->

<body>
  <div class="container">
    <div class="inner_container">
      <header>
        <img src="https://theuniversalconsultinggroup.com/assets/images/logo.png" width="100px" />
        <h1>Newsletter</h1>
      </header>
      <hr>
      <div class="email_content">
        <div class="email_inner_section">
          <section>
            <h3>Hi Admin, you have a new Newsletter request from {{ $name}}.</h3>
          </section>
          <section class="enquiry_submission">
            <table>
              <tbody>
                <tr>
                  <th>Name</th>
                  <td>{{ $name}}</td>
                </tr>
                <tr>
                  <th>Email Address</th>
                  <td>{{ $email}}</td>
                </tr>
              </tbody>
            </table>
          </section>
        </div>
      </div>
    </div>
    <!--   Footer     -->
   
    <!--   footer ends     -->
  </div>
</body>

</html>