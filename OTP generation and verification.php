<?php
$otp = rand(1000, 9999);
$userOtp = $otp;
echo "Generated OTP: $otp<br>";

if ($userOtp == $otp) {
    echo "OTP Verified Successfully";
} else {
    echo "Invalid OTP";
}
?>
