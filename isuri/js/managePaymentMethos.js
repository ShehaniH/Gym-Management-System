//  Delete payment method function

function deletePaymentMethod(paymentMethodId) {
    if (confirm("Are you sure you want to delete this payment method?")) {
        // Create an XMLHttpRequest object
        var xhr = new XMLHttpRequest();

        // Set up a callback function to handle the AJAX response
        xhr.onreadystatechange = function () {
            if (xhr.readyState === 4 && xhr.status === 200) {
                // Handle the response from the PHP file
                window.location.href = "managePaymentMethod.php";
                // var response = xhr.responseText;
                // alert(response); // Display the response message
                // window.location.reload(); // Refresh the page
            }
        };

        // Specify the PHP file and HTTP method (POST or GET)
        xhr.open("GET", "deletePaymentMethod.php?id=" + paymentMethodId, true);

        // Send the AJAX request
        xhr.send();
    }
}
