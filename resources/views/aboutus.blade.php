@extends('layouts.aboutus')
@section('main')
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>About Us</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.15.3/css/all.css" integrity="..." crossorigin="anonymous">
    <style type="text/css">
      body {
        font-family: Arial, sans-serif;
        font-size: 16px;
        color: #333;
        line-height: 1.5;
      }

      header img {
        width: 100%;
        height: auto;
      }

      .intro {
        text-align: center;
        padding: 50px 0;
      }

      .intro h1 {
        font-size: 36px;
        margin-bottom: 20px;
      }

      .our-story, .team {
        max-width: 700px;
        margin: 0 auto;
        padding: 50px 0;
      }

      .our-story h2, .team h2 {
        font-size: 24px;
        margin-bottom: 20px;
      }
      .main-section{
        margin-top: 60px;
      }
      .container-c{
        background-color: rgb(20, 82, 181);
        width: 180;
        font-family: monospace;
        font-style: italic;
      }
      .p{
        font-style: italic;
      }
      .note {
          position: fixed;
          bottom: 20px;
          left: 50%;
          transform: translateX(-50%);
          background-color: #fff;
          border: 2px solid #8f8f8f;
          box-shadow: 0px 2px 10px rgba(0,0,0,0.1);
          padding: 20px;
          max-width: 500px;
          width: calc(100% - 40px);
          display: flex;
          flex-direction: column;
          font-size: 16px;
        }
        .notes {
          position: fixed;
          bottom: 20px;
          left: 50%;
          transform: translateX(-50%);
          background-color: #fff;
          border: 2px solid white;
          box-shadow: 0px 2px 10px rgba(0,0,0,0.1);
          padding: 20px;
          max-width: 500px;
          width: calc(100% - 40px);
          display: flex;
          flex-direction: column;
          font-size: 16px;
          border-radius: 10px;
          
        }
        #notes{
          display: none;
        }


    </style>
    <script>
      $(document).ready(function(){
        $("button").click(function(){
          $("#notes").toggle();
        });
      });
    </script>
  </head>
  <body>
    <div class="main-section">
      <section class="intro">
        <h1 class="container-c">About Us</h1>
        <p class="p">We are a company dedicated to providing top-quality products and services. Our mission is to exceed our customers' expectations and make a positive impact in the world. Our values are built on a foundation of integrity, innovation, and excellence.</p>
      </section>
      <section class="our-story">
        <h2>Our Story</h2>
        <p>Founded in 20XX, our company has been on a journey to provide the best possible experience for our customers. From our humble beginnings, we have strived to continuously improve and evolve, and we are now a leader in our industry. Our success is a testament to the hard work and dedication of our team, and we are proud to have served so many satisfied customers over the years.</p>
      </section>
      <section class="team">
        <h2>Our Team</h2>
        <p>Our team is comprised of talented and passionate individuals who are dedicated to delivering the best possible experience for our customers. From sales and support to product development and marketing, our team is fully committed to achieving our mission and values.</p>
      </section>
    </div>
    <div class="notes alert alert-success">
        <p id="notes" class="text text-center">You can send a message or can ask any query in the contact us form given in the contact us navbar menu.</p>
        <button class="btn btn-info">Contact me</button>
    </div>
</html>
@endsection