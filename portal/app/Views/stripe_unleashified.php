<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Stripe Subscription</title>
 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://js.stripe.com/v3/"></script> 
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f7f7f7;
      padding: 20px;
    }
    .container {
      max-width: 400px;
      margin: 0 auto;
      background: #fff;
      border-radius: 8px;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
      padding: 20px;
    }
    h2 {
      text-align: center;
      color: #333;
    }
    form {
      display: flex;
      flex-direction: column;
    }
    input {
      margin-bottom: 10px;
      padding: 10px;
      border: 1px solid #ddd;
      border-radius: 4px;
    }
    #card-element {
      padding: 10px;
      border: 1px solid #ddd;
      border-radius: 4px;
    }
    button {
      padding: 10px;
      background-color: #6772e5;
      color: #fff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
    button:disabled {
      background-color: #ccc;
    }
    .error {
      color: red;
      font-size: 14px;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Stripe</h2>
    <form id="subscription-form">
      <input type="text"  disabled value="<?php echo $email ?>" />
      <input type="hidden" id="email" value="<?php echo $email ?>" placeholder="Enter your email"  />
      <div id="card-element"></div>
      <div class="error" id="card-errors"></div>
      <button type="submit" id="subscribe-button">Subscribe</button>
    </form>
  </div>
<!-- pk_test_51QI3TRG1A6yEwxeI3Z0C4YL4ghajSDD8LMiJQupWXovLP2uuFuHnXFVkAt0llwyIKoRMoWW52m4YQ0WGid1zRiwj00NjM70Jlj -->
<!-- pk_live_51QI3TRG1A6yEwxeIszNI5X18J1NEPkN2lk1Cf1UvAbYUYyBMEz4jaHNTDPhxYpFV72uwLY7RxC4gJpZuVDzIE2sp00B8ELrB6I -->
<script src="https://js.stripe.com/v3/"></script>
<script>
  const stripe = Stripe("pk_live_51QI3TRG1A6yEwxeIszNI5X18J1NEPkN2lk1Cf1UvAbYUYyBMEz4jaHNTDPhxYpFV72uwLY7RxC4gJpZuVDzIE2sp00B8ELrB6I");
  const elements = stripe.elements();
  const cardElement = elements.create("card");
  cardElement.mount("#card-element");

  $("#subscription-form").on("submit", function (event) {
    event.preventDefault();
    const email = $("#email").val();
    const $subscribeButton = $("#subscribe-button");
    const $cardErrors = $("#card-errors");

    $subscribeButton.prop("disabled", true);
    $cardErrors.text("");

    stripe.createPaymentMethod({
      type: "card",
      card: cardElement,
      billing_details: { email: email },
    }).then(({ paymentMethod, error }) => {
      if (error) {
        $cardErrors.text(error.message);
        $subscribeButton.prop("disabled", false);
        return;
      }

      $.ajax({
        url: "<?php echo base_url('gfa/create_subscription_ext'); ?>",
        method: "POST",
        contentType: "application/json",
        data: JSON.stringify({
          email: email,
          paymentMethodId: paymentMethod.id,
        }),
        success: function (response) {
          if (response.status === "success" && response.subscriptionId) {
            $cardErrors.text("Subscription successful! Redirecting...");
            setTimeout(() => {
              window.location.href = "https://unleashified.com/activate/success.html";
            }, 4000);
          } else {
            $cardErrors.text("Subscription failed. Please try again.");
          }
          $subscribeButton.prop("disabled", false);
        },
        error: function () {
          $cardErrors.text("An error occurred. Please try again.");
          $subscribeButton.prop("disabled", false);
        }
      });
    });
  });
</script>






</body>
</html>
