<?php 
include "views/header.php"?>
        <div class="reg-form">
            <p class="title">REGISTRATION</p>
            <form method="POST" action="models/register_account.php">
                <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="davidbro.ares@gmail.com">
                <label for="firstname">First Name</label>
                    <input type="text" name="firstname" id="firstname" placeholder="Philip">
                <label for="lastname">Last Name</label>
                    <input type="text" name="lastname" id="lastname" placeholder="Ares">
                <label for="password">Password</label>
                    <input type="password" name="password" id="password" placeholder="Enter your Password">
                <input type="submit" value="Signup">
            </form>
        </div>
  <?php
  include "views/footer.php";
