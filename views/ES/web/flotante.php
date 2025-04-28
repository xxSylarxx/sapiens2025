<style>
    .flotante {
        position: fixed;
        bottom: 5%;
        right: 2%;
        z-index: 99;
    }

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
        /*  background-color: #B8CCEB; */
        background-color: var(--color1);
        margin-top: 1rem;
        color: white !important;
        border-radius: 10px;
        box-shadow: 2px 2px 5px rgba(0, 0, 0, 2);
    }

    .f1 a {
        color: white;
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
        /*  .flotante {
            display: none;
        } */

        .flotante {
            position: absolute;
            right: 0;
            bottom: 60%;

        }

    }
</style>

<div class="flotante">
    <a href="https://form.typeform.com/to/CHUVngFJ" target="_blank">
        <div class="f1">CONTACTANOS</div>
    </a>
    <a href="https://form.typeform.com/to/Rji8VTdp" target="_blank">
        <div class="f2">POSTULA</div>
    </a>
</div>