<main></main>
<footer>
    <div id="footer_content">
        <div id="footer_social_media">
            <a href="#" class="footer-link1" id="instagram">
                <i class="fa-brands fa-instagram"></i>
            </a>
            <a href="#" class="footer-link1" id="discord">
                <i class="fa-brands fa-discord"></i>
            </a>
            <a href="#" class="footer-link1" id="twitter">
                <i class="fa-brands fa-x-twitter"></i>
            </a>
        </div>

        <div id="footer_subscribe">
            <h3>Inscreva-se</h3>
            <p>Digite seu email</p>
            <div id="input_group">
                <input type="email" id="email" placeholder="Seu e-mail">
                <button>
                    <i class="fa-regular fa-envelope"></i>
                </button>
            </div>
        </div>
    </div>

    <div id="footer_copyrigh">
        &#169;  Boina açucarada, todos os direitos reservados. 
    </div>
</footer>
 
</body>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');

:root {
  --primeira-cor: rgb(255,46,11);
  --segunda-cor: rgb(0,0,0);
  --terceira-cor: rgb(255,111,210);
  --quarta-cor: rgb(242,164,233);
  --quinta-cor: rgb(255,255,255);
  --sexta-cor: rgb(102,36,15);
  --setima-cor: rgb(216,200,255);
  --oitava-cor: rgb(177,186,245);
  --color-neutral-0: #0e0c0c;
  --color-neutral-10: #171717;
  --color-neutral-30: #a8a29e;
  --color-neutral-40: #f5f5f5;
}

main {
    height: 80vh;
}

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
}

footer {
    width: 100%;
    color: var(--color-neutral-40);
}

#footer_content {
    background-color: var(--color-neutral-10);
    display: grid;
    grid-template-columns: 1fr 1fr;
    padding: 3rem 3.5rem;
    gap: 2rem;
}

#footer_social_media {
    display: flex;
    gap: 2rem;
    justify-content: flex-start; /* Ajusta a posição para a esquerda */
}

.footer-link1 {
    height: 2.5rem;
    width: 2.5rem;
    color: var(--color-neutral-40);
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #ffffff;
    transition: background-color 0.3s ease;
}

.footer-link1:hover {
    background-color: var(--color-neutral-30);
}

#instagram {
    background: linear-gradient(#7f47c9, #ff2992, #ff9807);
}

#discord {
    background: linear-gradient(#2C2F33, #404ef0);
}

#twitter {
    background: black;
}

#footer_subscribe {
    display: flex;
    flex-direction: column;
    justify-content: center;
}

#footer_subscribe h3 {
    margin-bottom: 4px;
    font-size: 1.2rem;
    color: var(--color-neutral-30);
}

#input_group {
    display: flex;
    gap: 0.5rem;
}

#email {
    padding: 0.5rem;
    font-size: 1rem;
    border-radius: 5px;
    border: 1px solid var(--color-neutral-30);
    width: 250px;
}

button {
    padding: 0.5rem;
    font-size: 1.2rem;
    background-color: var(--color-neutral-30);
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

button i {
    font-size: 1.2rem;
}

button:hover {
    background-color: #ff9807;
}

#footer_copyrigh {
    background-color: var(--color-neutral-0);
    text-align: center;
    padding: 0.5rem;
    color: var(--color-neutral-40);
    font-size: 0.9rem;
    font-weight: 100;
}

@media screen and (max-width: 768px) {
    #footer_content {
        grid-template-columns: 1fr;
        padding: 2rem;
    }

    #footer_social_media {
        justify-content: center;
        margin-bottom: 2rem; /* Dá mais espaço entre as redes sociais e a inscrição */
    }

    #footer_subscribe {
        margin-top: 1rem;
        align-items: center;
    }
}

</style>
</html>