<!-- Section FAQ Création de Site -->
<section class="faq-section" style="background: #f4f7fa; padding: 60px 0;">
    <div class="container">
        <h2 class="faq-title" style="text-align:center; font-weight:700; margin-bottom:40px; font-size:2.3rem; color:#1a2233;">Questions fréquentes sur la création de site</h2>
        <div class="faq-list">
            <div class="faq-item">
                <button class="faq-question">Combien de temps faut-il pour créer un site web&nbsp;?</button>
                <div class="faq-answer">
                    <p>La durée dépend de la complexité du projet, mais en général, un site vitrine est livré en 2 à 4 semaines. Nous vous accompagnons à chaque étape pour garantir un résultat rapide et professionnel.</p>
                </div>
            </div>
            <div class="faq-item">
                <button class="faq-question">Dois-je fournir le contenu (textes, images)&nbsp;?</button>
                <div class="faq-answer">
                    <p>Vous pouvez fournir vos propres contenus, mais nous pouvons également vous accompagner dans la rédaction et la sélection d’images libres de droits pour un rendu optimal.</p>
                </div>
            </div>
            <div class="faq-item">
                <button class="faq-question">Mon site sera-t-il adapté aux mobiles&nbsp;?</button>
                <div class="faq-answer">
                    <p>Oui, tous nos sites sont conçus pour être 100% responsives et s’adapter parfaitement à tous les écrans (smartphones, tablettes, ordinateurs).</p>
                </div>
            </div>
            <div class="faq-item">
                <button class="faq-question">Proposez-vous un accompagnement après la mise en ligne&nbsp;?</button>
                <div class="faq-answer">
                    <p>Bien sûr&nbsp;! Nous restons disponibles pour toute question, modification ou évolution de votre site, même après sa mise en ligne.</p>
                </div>
            </div>
            <div class="faq-item">
                <button class="faq-question">Le référencement (SEO) est-il inclus&nbsp;?</button>
                <div class="faq-answer">
                    <p>Oui, nous optimisons chaque site pour le référencement naturel afin de maximiser votre visibilité sur Google et attirer plus de clients.</p>
                </div>
            </div>
            <div class="faq-item">
                <button class="faq-question">Mes données sont-elles sécurisées&nbsp;?</button>
                <div class="faq-answer">
                    <p>La sécurité de vos données est une priorité. Nous mettons en place les meilleures pratiques pour protéger votre site et vos informations.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.faq-section {
    font-family: 'Segoe UI', Arial, sans-serif;
}
.faq-title {
    letter-spacing: 0.5px;
}
.faq-list {
    max-width: 700px;
    margin: 0 auto;
    display: flex;
    flex-direction: column;
    gap: 18px;
}
.faq-item {
    background: #fff;
    border-radius: 14px;
    box-shadow: 0 2px 16px rgba(30,40,90,0.07);
    overflow: hidden;
    transition: box-shadow 0.3s;
}
.faq-item.open {
    box-shadow: 0 6px 32px rgba(30,40,90,0.13);
}
.faq-question {
    width: 100%;
    background: none;
    border: none;
    outline: none;
    font-size: 1.13rem;
    font-weight: 600;
    color: #1a2233;
    text-align: left;
    padding: 22px 28px;
    cursor: pointer;
    transition: background 0.2s;
    position: relative;
}
.faq-question::after {
    content: '\25BC';
    position: absolute;
    right: 28px;
    top: 50%;
    transform: translateY(-50%) rotate(0deg);
    transition: transform 0.3s;
    font-size: 1.1em;
    color: #6c7a89;
}
.faq-item.open .faq-question::after {
    transform: translateY(-50%) rotate(180deg);
}
.faq-answer {
    max-height: 0;
    overflow: hidden;
    background: #f4f7fa;
    color: #2a2a2a;
    font-size: 1.04rem;
    padding: 0 28px;
    transition: max-height 0.5s cubic-bezier(0.4,0,0.2,1), padding 0.3s;
}
.faq-item.open .faq-answer {
    padding: 0 28px 18px 28px;
    max-height: 200px;
}
.faq-question:focus {
    background: #eaf0fa;
}
@media (max-width: 700px) {
    .faq-list {
        max-width: 98vw;
    }
    .faq-question, .faq-answer {
        padding-left: 14px;
        padding-right: 14px;
    }
}
</style>

<script>
// Animation accordéon pour la FAQ
document.addEventListener('DOMContentLoaded', function() {
    const items = document.querySelectorAll('.faq-item');
    items.forEach(item => {
        const btn = item.querySelector('.faq-question');
        btn.addEventListener('click', function() {
            const isOpen = item.classList.contains('open');
            items.forEach(i => i.classList.remove('open'));
            if (!isOpen) item.classList.add('open');
        });
    });
    // Ouvre la première question par défaut
    if(items[0]) items[0].classList.add('open');
});
</script>
