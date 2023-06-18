@include('layout.frontend.header')
      <div class="container-fluid success-details-main  m-auto">
        <div class="card mt-5">
            <div class="success-details" style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;">
                <i class="checkmark">✓</i>
            </div>
            <h1>Hotel Booking Order Success !</h1> 
            <p>We received your booking request;<br/> Update Status ? Check Your User Panel</p>
        </div>
      </div>


    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,400i,700,900&display=swap" rel="stylesheet">
    <style>
         .success-details-main {
            text-align: center;
            padding: 80px 0;
            background: #EBF0F5;
         }
        .success-details-main h1 {
          color: #88B04B;
          font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
          font-weight: 900;
          font-size: 40px;
          margin-bottom: 10px;
        }
        .success-details-main p {
          color: #404F5E;
          font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
          font-size:20px;
          margin: 0;
        }
        .success-details-main .success-details i {
        color: #9ABC66;
        font-size: 100px;
        line-height: 200px;
        margin-left:-15px;
      }
      .card {
        background: white;
        padding: 60px;
        border-radius: 4px;
        box-shadow: 0 2px 3px #C8D0D8;
        display: inline-block;
        margin: 0 auto;
      }
    </style>

@include('layout.frontend.footer')