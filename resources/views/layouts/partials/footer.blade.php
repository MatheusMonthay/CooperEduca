<footer>
    <div class="social-cards-container">
        <div class="social-card instagram-card">
            <div class="card-iconf">
                <i class="fab fa-instagram"></i>
            </div>
            <div class="card-content">
                <h3>Nos siga no Instagram</h3>
                <p>Conteúdos exclusivos e atualizações diárias</p>
                <a href="https://www.instagram.com/coopereduca/" target="_blank" class="btn-social">
                    Acessar <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>

        <div class="social-card discord-card">
            <div class="card-iconf">
                <i class="fab fa-discord"></i>
            </div>
            <div class="card-content">
                <h3>Junte-se à comunidade</h3>
                <p>Interação, networking e suporte ao vivo</p>
                <a href="https://discord.gg/MgHGGXtj" target="_blank" class="btn-social">
                    Participar <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>

        <div class="social-card email-card">
            <div class="card-iconf">
                <i class="fas fa-envelope"></i>
            </div>
            <div class="card-content">
                <h3>Fale conosco</h3>
                <p>Tire dúvidas ou envie sugestões</p>
                <a href="mailto:coopereduca1@gmail.com" class="btn-social">
                    Enviar e-mail <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </div>

    <p>&copy; 2025 CooperEduca. Todos os direitos reservados.</p>
</footer>

<style>
    .social-cards-container {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        gap: 20px;
        padding: 15px;
        max-width: 1000px;
        margin: 0 auto;
    }
    
    .social-card {
        flex: 1;
        min-width: 220px;
        max-width: 280px;
        background: white;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 4px 10px rgba(0, 77, 38, 0.1);
        transition: all 0.3s ease;
        display: flex;
        flex-direction: column;
    }
    
    .social-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 15px rgba(0, 77, 38, 0.15);
    }
    
    .card-iconf {
        background-color: #004d26;
        color: white;
        padding: 15px 0;
        text-align: center;
        font-size: 1.8rem;
    }
    
    .card-content {
        padding: 15px;
        flex-grow: 1;
        display: flex;
        flex-direction: column;
    }
    
    .card-content h3 {
        color: #004d26;
        font-size: 1.1rem;
        margin-bottom: 8px;
    }
    
    .card-content p {
        color: #555;
        line-height: 1.4;
        margin-bottom: 15px;
        flex-grow: 1;
        font-size: 0.9rem;
    }
    
    .btn-social {
        display: inline-block;
        background-color: #00a65a;
        color: white;
        padding: 8px 15px;
        border-radius: 5px;
        text-decoration: none;
        text-align: center;
        font-weight: 600;
        transition: background-color 0.3s;
        margin-top: auto;
        font-size: 0.9rem;
    }
    
    .btn-social:hover {
        background-color: #008f4a;
    }
    
    .btn-social i {
        margin-left: 5px;
        transition: transform 0.3s;
        font-size: 0.8rem;
    }
    
    .btn-social:hover i {
        transform: translateX(3px);
    }
    
    .instagram-card .card-iconf {
        background: linear-gradient(45deg, #405DE6, #833AB4, #C13584, #E1306C, #FD1D1D, #F56040, #F77737);
    }
    
    .discord-card .card-iconf {
        background-color: #5865F2;
    }
    
    .email-card .card-iconf {
        background-color: #004d26;
    }
    
    /* Responsividade */
    @media (max-width: 768px) {
        .social-card {
            min-width: 100%;
            max-width: 100%;
        }
        
        .social-cards-container {
            gap: 15px;
            padding: 10px;
        }
    }
</style>