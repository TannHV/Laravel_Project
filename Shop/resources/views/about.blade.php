@extends('layout.master')

@section('body')
<!-- Breadcrumb Start -->
<div class="container-fluid">
    <div class="row px-xl-5">
        <div class="col-12">
            <nav class="breadcrumb bg-light mb-30">
                <a class="breadcrumb-item text-dark" href="/">Home</a>
                <span class="breadcrumb-item active">About US</span>
            </nav>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->
<div class="company">
    <div class="img">
        <img src="https://raw.githubusercontent.com/pico-india/main-django/main/static/about-team.jpg" alt="" />
    </div>
    <div class="company-info">
        <span>PHOTOS <span class="our">FOR EVERYONE</span></span>
        <p>
            <b>Pico</b> is a India-based website dedicated for sharing stock photography under the Pico license. Pico allows
            photographers to upload photos to its website, which are then curated by a team of photo editors. In Pico we are
            aspiring to be one of the largest photography suppliers on the internet.
        </p>
    </div>
</div>
<!-- ---------------------------------------------------------------------------------------------------------------------- -->
<!-- Contact Start -->
<div class="container-fluid">
    <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Contact Us</span></h2>
    <div class="row px-xl-5">
        <div class="col-lg-7 mb-5">
            <div class="contact-form bg-light p-30">
                <div id="success"></div>
                <form name="sentMessage" id="contactForm" novalidate="novalidate">
                    <div class="control-group">
                        <input type="text" class="form-control" id="name" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="email" class="form-control" id="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" class="form-control" id="subject" placeholder="Subject" required="required" data-validation-required-message="Please enter a subject" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <textarea class="form-control" rows="8" id="message" placeholder="Message" required="required" data-validation-required-message="Please enter your message"></textarea>
                        <p class="help-block text-danger"></p>
                    </div>
                    <div>
                        <button class="btn btn-primary py-2 px-4" type="submit" id="sendMessageButton">Send
                            Message</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-lg-5 mb-5">
            <div class="bg-light p-30 mb-30">
                <iframe style="width: 100%; height: 250px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
            <div class="bg-light p-30 mb-3">
                <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>123 Street, New York, USA</p>
                <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>info@example.com</p>
                <p class="mb-2"><i class="fa fa-phone-alt text-primary mr-3"></i>+012 345 67890</p>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->

@endsection
<style>
    .company {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
    }

    .company-info {
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .img {
        width: 100%;
        margin: 1rem 0rem 0rem 2rem;
    }

    .img img {
        width: 100%;
    }

    .company-info {
        width: 100%;
        margin-right: 4rem;
    }

    .company-info span {
        font-size: 2.5rem;
        font-weight: bold;
    }

    .company-info span .our {
        color: #ffdc0e;
    }

    .company-info p {
        font-size: 1.1rem;
    }

    /* ----------------------------------------------- */

    .team {
        display: flex;
        justify-content: center;
    }

    .team span {
        font-size: 2.5rem;
        font-weight: bold;
        border-bottom: 4px solid #ffdc0e;
    }

    .container {
        min-height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
    }

    .card {
        position: relative;
        background: #fff;
        max-width: 350px;
        width: 350px;
        margin: 20px;
        border-radius: 2px;
        box-shadow: 0 5px 25px rgb(1 1 1 / 10%);
    }

    .card-image {
        max-height: 50vh;
        overflow: hidden;
    }

    .card-image img {
        max-width: 100%;
        height: auto;
        visibility: hidden;
    }

    .card-title span {
        visibility: hidden;
    }

    .yellow-surname {
        color: #ffdc0e;
    }

    .card-description span {
        visibility: hidden;
    }

    .card-mediaIcons a i {
        visibility: hidden;
    }

    .card-info {
        position: relative;
        color: #222;
        padding: 20px;
    }

    .card-info h3 {
        font-size: 1.4em;
        font-weight: 700;
        margin-bottom: 10px;
    }

    .card-info h4 {
        font-size: 1rem;
        font-weight: normal;
    }

    .card-info a {
        text-decoration: none;
        color: navy;
    }

    .card-info p {
        font-size: 1em;
        margin-bottom: 15px;
    }

    .card-info .card-mediaIcons {
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .card-info .card-mediaIcons a {
        color: #999;
        font-size: 1.4em;
        margin: 0 10px;
        width: 40px;
        height: 40px;
        display: flex;
        justify-content: center;
        align-items: center;
        text-decoration: none;
        border-radius: 50%;
        transition: color 0.3s ease;
    }

    .card-info .card-mediaIcons a:hover {
        color: #222;
    }

    .card-mediaIcons a img {
        width: 40px;
    }

    .loading {
        position: relative;
        background: #e2e2e2;
        overflow: hidden;
    }

    .loading:before {
        content: "";
        position: absolute;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg,
                transparent,
                rgba(255, 255, 255, 0.2),
                transparent);
        transform: translateX(-100%);
        animation: loading 1.5s infinite;
    }

    .info {
        font-size: 1.2rem;
        font-weight: 500;
    }

    @keyframes loading {
        100% {
            transform: translateX(100%);
        }
    }

</style>
<script>
    const cardImages = document.querySelectorAll(".card-image");
    const cardTitles = document.querySelectorAll(".card-title");
    const cardDescriptions = document.querySelectorAll(".card-description");
    const cardMediaIcons = document.querySelectorAll(".card-mediaIcons a");
    const cardImgs = document.querySelectorAll(".card-image img");
    const cardTitleSpans = document.querySelectorAll(".card-title span");
    const cardDescSpans = document.querySelectorAll(".card-description span");
    const mediaIcons = document.querySelectorAll(".card-mediaIcons a i");

    const renderCard = () => {
        //Remove the skeleton loading effect
        cardImages.forEach((cardImage) => {
            cardImage.classList.remove("loading");
        });
        cardTitles.forEach((cardTitle) => {
            cardTitle.classList.remove("loading");
        });
        cardDescriptions.forEach((cardDescription) => {
            cardDescription.classList.remove("loading");
        });
        cardMediaIcons.forEach((cardMediaIcon) => {
            cardMediaIcon.classList.remove("loading");
        });

        //Show the hidden html elements
        cardImgs.forEach((cardImg) => {
            cardImg.style.visibility = "visible";
        });
        cardTitleSpans.forEach((cardTitleSpan) => {
            cardTitleSpan.style.visibility = "visible";
        });
        cardDescSpans.forEach((cardDescSpan) => {
            cardDescSpan.style.visibility = "visible";
        });
        mediaIcons.forEach((mediaIcon) => {
            mediaIcon.style.visibility = "visible";
        });
    }

    //Execute renderCard on setTimeout
    setTimeout(() => {
        renderCard();
    }, 1000);

    //Execute renderCard after the page loaded
    //window.addEventListener("load", () => {
    //renderCard();
    //});

</script>
