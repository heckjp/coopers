<?php get_header(); ?>
    <div class="grid-container fluid">
        <div class="grid-x grid-margin-x dark-block align-center-middle">
            <div class="cell small-12 medium-6 text-center">
                <?php if( get_field('titulo') ): ?>
                    <h1><strong><?php the_field('titulo'); ?></strong></h1>
                <?php endif; ?>
                <?php if( get_field('descricao') ): ?>
                    <p><?php the_field('descricao'); ?></p>
                <?php endif; ?>
                <br>
                <p class="float-left">Conheça o premium 
                    <img src="<?php echo get_template_directory_uri().'/img/Line 2.png';?>" />
                </p>
            </div>
            <div class="cell small-12 medium-3 medium-offset-2 text-center">
                <div class="row">
                    <span class="columns numeros">+12 milhões</span>
                    <span class="columns"> de visitas por mes</span>
                </div>

                <hr class="separator" />

                <div class="row">
                    <span class="columns numeros">+8 milhões</span>
                    <span class="columns"> de locais cadastrados</span>
                </div>

                <hr class="separator" />

                <div class="row">
                    <span class="columns numeros">+45</span>
                    <span class="columns"> categorias para pesquisa</span>
                </div>
            </div>
        </div>
    </div>
    <div class="grid-container" id="integracoes">
        <div class="grid-x grid-margin-x align-center-middle">
            <div class="cell small-12 medium-6 text-center">
                    <img src="<?php echo get_template_directory_uri(). '/img/monitor.png';?>">
                    <img src="<?php echo get_template_directory_uri(). '/img/Bitmap.png';?>" class="image">
                    <img src="<?php echo get_template_directory_uri(). '/img/Rectangle 3.png';?>" class="square">
            </div>
            <div class="cell small-12 medium-6">
            <img src="<?php echo get_template_directory_uri(). '/img/google.png';?>">
                <?php if( get_field('titulo_google') ): ?>
                        <h3><strong><?php the_field('titulo_google'); ?></strong></h3>
                <?php endif; ?>
                <?php if( get_field('descricao_google') ): ?>
                    <p><?php the_field('descricao_google'); ?></p>
                <?php endif; ?>
            <p>Esteja entre os primeiros resultados nas buscas por estabelecimentos da sua categoria.</p>
            <p><strong>Cadastro grátis</strong> <img src="<?php echo get_template_directory_uri().'/img/Line 2.png';?>"> </p>
            </div>
        </div>
        <div class="grid-x grid-margin-x align-center-middle">
            <div class="cell small-12 medium-6">
                <?php if( get_field('titulo_alexa') ): ?>
                        <h3><strong><?php the_field('titulo_alexa'); ?></strong></h3>
                <?php endif; ?>
                <?php if( get_field('descricao_alexa') ): ?>
                    <p><?php the_field('descricao_alexa'); ?></p>
                <?php endif; ?>
                <p>Você pergunta e a Alexa responde sgerindo o seu estabelecimento.</p>
                <p><strong>Cadastro grátis</strong> <img src="<?php echo get_template_directory_uri().'/img/Line 2.png';?>"> </p>
            </div>
            <div class="cell small-12 medium-6 text-center">
            <img src="<?php echo get_template_directory_uri(). '/img/Bitmap1.png';?>">
                <img src="<?php echo get_template_directory_uri(). '/img/Bitmap3.png';?>" class="image-right">
                <img src="<?php echo get_template_directory_uri(). '/img/Rectangle.png';?>"class="square-right">
            </div>
        </div>
        <div class="grid-x grid-margin-x align-center-middle">
            <div class="cell small-12 medium-6 text-center">
                    <img src="<?php echo get_template_directory_uri(). '/img/16341 1.png';?>">
                    <img src="<?php echo get_template_directory_uri(). '/img/Bitmap2.png';?>" class="image">
                    <img src="<?php echo get_template_directory_uri(). '/img/Rectangle 3.png';?>" class="square">
            </div>
            <div class="cell small-12 medium-6">
                <img src="<?php echo get_template_directory_uri(). '/img/apple.png';?>">
                <?php if( get_field('car_maps') ): ?>
                    <h3><strong><?php the_field('car_maps'); ?></strong></h3>
                <?php endif; ?>
                <?php if( get_field('descricao_apple_maps') ): ?>
                    <p><?php the_field('descricao_apple_maps'); ?></p>
                <?php endif; ?>
                <p><strong>Conheça o premium</strong> <img src="<?php echo get_template_directory_uri().'/img/Line 2.png';?>"> </p>
            </div>
        </div>
    </div>
    <div class="grid-container" id="planos">
        <div class="grid-x grid-margin-x align-center-middle">
            <div class="cell small-12 medium-4 gratis">
                <h2 class="text-center"><strong>Cadastro Grátis</strong></h2>
                <h3 class="free text-center">R$0</h3>
                <p class="text-center">Seu espaço com ferramentas ilimitadas</p>
                <p><a class=" button secondary expanded large">cadastro grátis</a></p>
                <p><img src="<?php echo get_template_directory_uri(). '/img/check.png';?>"> Suporte técnico do atendimento</p>
                <p><img src="<?php echo get_template_directory_uri(). '/img/check.png';?>"> Inserir fotos</p>
                <p><img src="<?php echo get_template_directory_uri(). '/img/check.png';?>"> Inserir inserir telefone (apenas 1)</p>
                <p><img src="<?php echo get_template_directory_uri(). '/img/check.png';?>"> Informações sobre funcionamento</p>
                <p><img src="<?php echo get_template_directory_uri(). '/img/check.png';?>"> Categorias (apenas 1)</p>
                <p><img src="<?php echo get_template_directory_uri(). '/img/cancel.png';?>"> Descrição do local (até 3282 caracteres)</p>
                <p><img src="<?php echo get_template_directory_uri(). '/img/cancel.png';?>"> Inserir palavras-chave</p>
                <p><img src="<?php echo get_template_directory_uri(). '/img/cancel.png';?>"> Informações sobre pagamento</p>
                <p><img src="<?php echo get_template_directory_uri(). '/img/cancel.png';?>"> Autonomia para edição completa da página</p>
                <p><img src="<?php echo get_template_directory_uri(). '/img/cancel.png';?>"> Posição de destaque</p>
                <p><img src="<?php echo get_template_directory_uri(). '/img/cancel.png';?>"> Página sem concorrente ou publicidade</p>
                <p><img src="<?php echo get_template_directory_uri(). '/img/cancel.png';?>"> Acesso ao painel de controle com estatística</p>
                <p><img src="<?php echo get_template_directory_uri(). '/img/cancel.png';?>"> Responder avaliação dos clientes</p>
                <p><img src="<?php echo get_template_directory_uri(). '/img/cancel.png';?>"> Caixa para mensagens diretas</p>
                <p><img src="<?php echo get_template_directory_uri(). '/img/cancel.png';?>"> Ativação de cupom de oferta</p>
                <p><img src="<?php echo get_template_directory_uri(). '/img/cancel.png';?>"> Raio de alcance estendido (até 10 cidades ou todo Brasil)</p>
            </div>
            <div class="cell small-12 medium-4 premium">
                <h2 class="text-center"><strong>Plano Prata</strong></h2>
                <?php if( get_field('preco_prata') ): ?>
                        <h3 class="prata text-center">R$<?php the_field('preco_prata'); ?></h3>
                <?php endif; ?>

                <p class="text-center">Mensal</p>
                <p><a class=" button secondary expanded large">assine hoje!</a></p>
                <p><img src="<?php echo get_template_directory_uri(). '/img/check.png';?>"> Suporte técnico do atendimento</p>
                <p><img src="<?php echo get_template_directory_uri(). '/img/check.png';?>"> Inserir fotos</p>
                <p><img src="<?php echo get_template_directory_uri(). '/img/check.png';?>"> Inserir inserir telefone (até 3)</p>
                <p><img src="<?php echo get_template_directory_uri(). '/img/check.png';?>"> Informações sobre funcionamento</p>
                <p><img src="<?php echo get_template_directory_uri(). '/img/check.png';?>"> Categorias (até 30)</p>
                <p><img src="<?php echo get_template_directory_uri(). '/img/check.png';?>"> Descrição do local (até 3282 caracteres)</p>
                <p><img src="<?php echo get_template_directory_uri(). '/img/check.png';?>"> Inserir palavras-chave</p>
                <p><img src="<?php echo get_template_directory_uri(). '/img/check.png';?>"> Informações sobre pagamento</p>
                <p><img src="<?php echo get_template_directory_uri(). '/img/check.png';?>"> Autonomia para edição completa da página</p>
                <p><img src="<?php echo get_template_directory_uri(). '/img/check.png';?>"> Posição de destaque</p>
                <p><img src="<?php echo get_template_directory_uri(). '/img/check.png';?>"> Página sem concorrente ou publicidade</p>
                <p><img src="<?php echo get_template_directory_uri(). '/img/check.png';?>"> Acesso ao painel de controle com estatística</p>
                <p><img src="<?php echo get_template_directory_uri(). '/img/check.png';?>"> Responder avaliação dos clientes</p>
                <p><img src="<?php echo get_template_directory_uri(). '/img/check.png';?>"> Caixa para mensagens diretas</p>
                <p><img src="<?php echo get_template_directory_uri(). '/img/check.png';?>"> Ativação de cupom de oferta</p>
                <p><img src="<?php echo get_template_directory_uri(). '/img/cancel.png';?>"> Raio de alcance estendido (até 10 cidades ou todo Brasil)</p>
            </div>
            <div class="cell small-12 medium-4 premium">
                <h2 class="text-center"><strong>Plano Platinum</strong></h2>
                <?php if( get_field('preco_platinum') ): ?>
                        <h3 class="platinum text-center">R$<?php the_field('preco_platinum'); ?></h3>
                <?php endif; ?>
                <p class="text-center">Mensal</p>
                <p><a class=" button dark expanded large">assine hoje!</a></p>
                <p><img src="<?php echo get_template_directory_uri(). '/img/check.png';?>"> Suporte técnico do atendimento</p>
                <p><img src="<?php echo get_template_directory_uri(). '/img/check.png';?>"> Inserir fotos</p>
                <p><img src="<?php echo get_template_directory_uri(). '/img/check.png';?>"> Inserir inserir telefone (até 3)</p>
                <p><img src="<?php echo get_template_directory_uri(). '/img/check.png';?>"> Informações sobre funcionamento</p>
                <p><img src="<?php echo get_template_directory_uri(). '/img/check.png';?>"> Categorias (até 30)</p>
                <p><img src="<?php echo get_template_directory_uri(). '/img/check.png';?>"> Descrição do local (até 3282 caracteres)</p>
                <p><img src="<?php echo get_template_directory_uri(). '/img/check.png';?>"> Inserir palavras-chave</p>
                <p><img src="<?php echo get_template_directory_uri(). '/img/check.png';?>"> Informações sobre pagamento</p>
                <p><img src="<?php echo get_template_directory_uri(). '/img/check.png';?>"> Autonomia para edição completa da página</p>
                <p><img src="<?php echo get_template_directory_uri(). '/img/check.png';?>"> Posição de destaque</p>
                <p><img src="<?php echo get_template_directory_uri(). '/img/check.png';?>"> Página sem concorrente ou publicidade</p>
                <p><img src="<?php echo get_template_directory_uri(). '/img/check.png';?>"> Acesso ao painel de controle com estatística</p>
                <p><img src="<?php echo get_template_directory_uri(). '/img/check.png';?>"> Responder avaliação dos clientes</p>
                <p><img src="<?php echo get_template_directory_uri(). '/img/check.png';?>"> Caixa para mensagens diretas</p>
                <p><img src="<?php echo get_template_directory_uri(). '/img/check.png';?>"> Ativação de cupom de oferta</p>
                <p><img src="<?php echo get_template_directory_uri(). '/img/check.png';?>"> Raio de alcance estendido (até 10 cidades ou todo Brasil)</p>
            </div>
        </div>
    </div>
   
<?php get_footer();