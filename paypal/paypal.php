<!DOCTYPE html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Ensures optimal rendering on mobile devices. -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge" /> <!-- Optimal Internet Explorer compatibility -->
</head>

<body>
  <script
    src="https://www.paypal.com/sdk/js?client-id=AWBzaWfCdyMmUbcLEdnheIN4_828RRPP_QyXk91e6Fy_ZHTggvKZC4LyFuxl6KAjdpC_5N-meK0JHofY"> // Required. Replace SB_CLIENT_ID with your sandbox client ID.
  </script>


  <div id="paypal-button-container"></div>

  <script>
    paypal.Buttons().render('#paypal-button-container');
    // This function displays Smart Payment Buttons on your web page.
  </script>

</body>
