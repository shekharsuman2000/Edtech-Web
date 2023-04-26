@extends('layouts.main')

@section('testimonial')
<!DOCTYPE html>
<html>
<head>
  <title>Testimonials</title>

  <style type="text/css">
    @import url(https://fonts.googleapis.com/css?family=Roboto:300,400);
    @import url(https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css);
    .snip1533 {
      box-shadow: 0 0 5px rgba(0, 0, 0, 0.15);
      color: #9e9e9e;
      display: inline-block;
      font-family: 'Roboto', Arial, sans-serif;
      font-size: 16px;
      margin: 35px 10px 10px;
      max-width: 310px;
      min-width: 250px;
      position: relative;
      text-align: center;
      width: 100%;
      background-color: #ffffff;
      border-radius: 5px;
      border-top: 5px solid #d2652d;
    }

    .snip1533 *,
    .snip1533 *:before {
      -webkit-box-sizing: border-box;
      box-sizing: border-box;
      -webkit-transition: all 0.1s ease-out;
      transition: all 0.1s ease-out;
    }

    .snip1533 figcaption {
      padding: 13% 10% 12%;
    }

    .snip1533 figcaption:before {
      -webkit-transform: translateX(-50%);
      transform: translateX(-50%);
      background-color: #fff;
      border-radius: 50%;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.25);
      color: #d2652d;
      content: "\f10e";
      font-family: 'FontAwesome';
      font-size: 32px;
      font-style: normal;
      left: 50%;
      line-height: 60px;
      position: absolute;
      top: -30px;
      width: 60px;
    }

    .snip1533 h3 {
      color: #3c3c3c;
      font-size: 20px;
      font-weight: 300;
      line-height: 24px;
      margin: 10px 0 5px;
    }

    .snip1533 h4 {
      font-weight: 400;
      margin: 0;
      opacity: 0.5;
    }

    .snip1533 blockquote {
      font-style: italic;
      font-weight: 300;
      margin: 0 0 20px;
    }


    /* Demo purposes only */

    body {
      background-color: #212121;
      text-align: center;
    }
      </style>

      <script type="text/javascript">
        $(".hover").mouseleave(
      function() {
        $(this).removeClass("hover");
      }
    );
      </script>

    </head>
    <body>  
        <figure class="snip1533">
        <figcaption>
          <blockquote>
            <p>Hello Naveen sir,
              I am Sanjana from OraApps Batch-2. I had a very good experience during the whole training period. It was nice to revise all the basics that helped me learn the other concepts in detail. You made us understand all the concepts easily and the everyday assignments helped me remember the concepts better. I will try to adapt to this learning method in the future and thank you sir 😄</p>
          </blockquote>
          <h3>Sanjana</h3>
          <h4>Student</h4>
        </figcaption>
      </figure>
      <figure class="snip1533">
        <figcaption>
          <blockquote>
            <p>You made the sessions very intresting sir. It wasn't boring even on one day. Nav ela esto sala matadkondidivi that you are the best trainer and we were really blessed to have you as our trainer sir. Nim tara mathe yaru sigala ansathe munde. We'll miss you. Thank you so much!</p>
          </blockquote>
          <h3>Unknown</h3>
          <h4></h4>
        </figcaption>
      </figure>

    </body>
</html>
@endsection