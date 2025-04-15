<style>
    .floating {
        position: fixed;
        bottom: 5%;
        right: 2%;
        z-index: 99;
    }

    /*  .floating a{
        color:white;
    } */
    .f1:hover {
        transform: scale(1.1);
        transition: 0.2s;
    }

    .f2:hover {
        transform: scale(1.1);
        transition: 0.2s;
    }

    .f1 {
        padding: 1rem;
        /* background-color: #B8CCEB; */
        background-color: var(--color1);
        margin-top: 1rem;
        color: white !important;
        border-radius: 10px;
        box-shadow: 2px 2px 5px rgba(0, 0, 0, 2);
    }

    .f1 a {
        color: white !important;
    }

    .f2 {
        /* background-color: #00A6B6; */
        background-color: #00A6B6;
        padding: 1rem;
        margin-top: 1rem;
        color: white !important;
        box-shadow: 2px 2px 5px rgba(0, 0, 0, 2);
        border-radius: 10px;
    }

    .f2 a {
        color: white;
    }

    @media screen and (max-width: 768px) {

        /* .floating {
           display: none;
        } */
        .floating {

            bottom: 60%;

        }
    }
</style>

<div class="floating">
    <a href="https://form.typeform.com/to/D9aWGSyl" target="_blank">
        <div class="f1">CONTACT US</div>
    </a>
    <a href="https://form.typeform.com/to/Y5L33Xfb" target="_blank">
        <div class="f2">JOIN US</div>
    </a>
</div>