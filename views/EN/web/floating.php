<style>
    .floating {
        position: fixed;
        bottom: 36%;
        left: 90%;
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
        background-color: #B8CCEB;
        margin-top: 1rem;

        border-radius: 10px;
        box-shadow: 2px 2px 5px rgba(0, 0, 0, 2);
    }

    .f1 a {
        color: var(--color1);
    }

    .f2 {
        background-color: #00A6B6;
        padding: 1rem;
        margin-top: 1rem;

        box-shadow: 2px 2px 5px rgba(0, 0, 0, 2);
        border-radius: 10px;
    }
    .f2 a {
        color: white;
    }

</style>

<div class="floating">
    <div class="f1"><a href="https://form.typeform.com/to/D9aWGSyl" target="_blank">Contact Us</a></div>
    <div class="f2"><a href="https://form.typeform.com/to/Y5L33Xfb" target="_blank">Join Us</a></div>
</div>