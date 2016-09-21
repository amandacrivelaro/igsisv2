<div class="usuarios view col-lg-10 col-md-9">
    <h3><?= h($usuario->id) ?></h3>
    <table class="table table-striped table-hover">
        <tr>
            <th>Nome Completo</th>
            <td><?= h($usuario->nome_completo) ?></td>
        </tr>
        <tr>
            <th>Rf</th>
            <td><?= h($usuario->rf) ?></td>
        </tr>
        <tr>
            <th>Nome Usuario</th>
            <td><?= h($usuario->nome_usuario) ?></td>
        </tr>
        <tr>
            <th>Senha</th>
            <td><?= h($usuario->senha) ?></td>
        </tr>
        <tr>
            <th>Telefone</th>
            <td><?= h($usuario->telefone) ?></td>
        </tr>
        <tr>
            <th>Instituicao</th>
            <td><?= $usuario->has('instituicao') ? $this->Html->link($usuario->instituicao->id, ['controller' => 'Instituicaos', 'action' => 'view', $usuario->instituicao->id]) : '' ?></td>
        </tr>
        <tr>
            <th>Email</th>
            <td><?= h($usuario->email) ?></td>
        </tr>
        <tr>
            <th>'Id</th>
            <td><?= $this->Number->format($usuario->id) ?></td>
        </tr>
        <tr>
            <th>'Contratos</th>
            <td><?= $this->Number->format($usuario->contratos) ?></td>
        </tr>
        <tr>
            <th>Receber Notificacao</th>
            <td><?= $usuario->receber_notificacao ? __('Yes') : __('No'); ?></td>
         </tr>
        <tr>
            <th>Publicado</th>
            <td><?= $usuario->publicado ? __('Yes') : __('No'); ?></td>
         </tr>
    </table>
    <div class="row">
        <h4>Local</h4>
        <?= $this->Text->autoParagraph(h($usuario->local)); ?>
    </div>
    <div class="row">
        <h4>Verba</h4>
        <?= $this->Text->autoParagraph(h($usuario->verba)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related {0}', ['Chamado Comentarios']) ?></h4>
        <?php if (!empty($usuario->chamado_comentarios)): ?>
        <table class="table table-striped table-hover">
            <tr>
                <th>Id</th>
                <th>Chamado Id</th>
                <th>Data</th>
                <th>Usuario Id</th>
                <th>Comentario</th>
                <th class="actions"><?= __('Ação') ?></th>
            </tr>
            <?php foreach ($usuario->chamado_comentarios as $chamadoComentarios): ?>
            <tr>
                <td><?= h($chamadoComentarios->id) ?></td>
                <td><?= h($chamadoComentarios->chamado_id) ?></td>
                <td><?= h($chamadoComentarios->data) ?></td>
                <td><?= h($chamadoComentarios->usuario_id) ?></td>
                <td><?= h($chamadoComentarios->comentario) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Visualizar'), ['controller' => 'ChamadoComentarios', 'action' => 'view', $chamadoComentarios->id]) ?>

                    <?= $this->Html->link(__('Editar'), ['controller' => 'ChamadoComentarios', 'action' => 'edit', $chamadoComentarios->id]) ?>

                    <?= $this->Form->postLink(__('Excluir'), ['controller' => 'ChamadoComentarios', 'action' => 'delete', $chamadoComentarios->id], ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $chamadoComentarios->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related {0}', ['Chamados']) ?></h4>
        <?php if (!empty($usuario->chamados)): ?>
        <table class="table table-striped table-hover">
            <tr>
                <th>Id</th>
                <th>Titulo</th>
                <th>Tipo Chamado Id</th>
                <th>Evento Id</th>
                <th>Descricao</th>
                <th>Justificativa</th>
                <th>Data</th>
                <th>Usuario Id</th>
                <th>Estado</th>
                <th>Nota</th>
                <th class="actions"><?= __('Ação') ?></th>
            </tr>
            <?php foreach ($usuario->chamados as $chamados): ?>
            <tr>
                <td><?= h($chamados->id) ?></td>
                <td><?= h($chamados->titulo) ?></td>
                <td><?= h($chamados->tipo_chamado_id) ?></td>
                <td><?= h($chamados->evento_id) ?></td>
                <td><?= h($chamados->descricao) ?></td>
                <td><?= h($chamados->justificativa) ?></td>
                <td><?= h($chamados->data) ?></td>
                <td><?= h($chamados->usuario_id) ?></td>
                <td><?= h($chamados->estado) ?></td>
                <td><?= h($chamados->nota) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Visualizar'), ['controller' => 'Chamados', 'action' => 'view', $chamados->id]) ?>

                    <?= $this->Html->link(__('Editar'), ['controller' => 'Chamados', 'action' => 'edit', $chamados->id]) ?>

                    <?= $this->Form->postLink(__('Excluir'), ['controller' => 'Chamados', 'action' => 'delete', $chamados->id], ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $chamados->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related {0}', ['Controle Orcamentos']) ?></h4>
        <?php if (!empty($usuario->controle_orcamentos)): ?>
        <table class="table table-striped table-hover">
            <tr>
                <th>Id</th>
                <th>Usuario Id</th>
                <th>Verba Id</th>
                <th>Instituicao Id</th>
                <th>Verba Pai</th>
                <th>Publicado</th>
                <th class="actions"><?= __('Ação') ?></th>
            </tr>
            <?php foreach ($usuario->controle_orcamentos as $controleOrcamentos): ?>
            <tr>
                <td><?= h($controleOrcamentos->id) ?></td>
                <td><?= h($controleOrcamentos->usuario_id) ?></td>
                <td><?= h($controleOrcamentos->verba_id) ?></td>
                <td><?= h($controleOrcamentos->instituicao_id) ?></td>
                <td><?= h($controleOrcamentos->verba_pai) ?></td>
                <td><?= h($controleOrcamentos->publicado) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Visualizar'), ['controller' => 'ControleOrcamentos', 'action' => 'view', $controleOrcamentos->id]) ?>

                    <?= $this->Html->link(__('Editar'), ['controller' => 'ControleOrcamentos', 'action' => 'edit', $controleOrcamentos->id]) ?>

                    <?= $this->Form->postLink(__('Excluir'), ['controller' => 'ControleOrcamentos', 'action' => 'delete', $controleOrcamentos->id], ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $controleOrcamentos->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related {0}', ['Eventos']) ?></h4>
        <?php if (!empty($usuario->eventos)): ?>
        <table class="table table-striped table-hover">
            <tr>
                <th>Id</th>
                <th>Nome Evento</th>
                <th>Relacao Juridica Id</th>
                <th>Projeto Especial Id</th>
                <th>Tipo Evento Id</th>
                <th>Sub Evento</th>
                <th>Fiscal Id</th>
                <th>Suplente Id</th>
                <th>Autor</th>
                <th>Ficha Tecnica</th>
                <th>Sinopse</th>
                <th>Release Com</th>
                <th>Faixa Etaria Id</th>
                <th>Links Com</th>
                <th>Produtor Id</th>
                <th>Usuario Id</th>
                <th>Instituicao Id</th>
                <th>Data Envio</th>
                <th>Ocupacao</th>
                <th>Publicado</th>
                <th class="actions"><?= __('Ação') ?></th>
            </tr>
            <?php foreach ($usuario->eventos as $eventos): ?>
            <tr>
                <td><?= h($eventos->id) ?></td>
                <td><?= h($eventos->nome_evento) ?></td>
                <td><?= h($eventos->relacao_juridica_id) ?></td>
                <td><?= h($eventos->projeto_especial_id) ?></td>
                <td><?= h($eventos->tipo_evento_id) ?></td>
                <td><?= h($eventos->sub_evento) ?></td>
                <td><?= h($eventos->fiscal_id) ?></td>
                <td><?= h($eventos->suplente_id) ?></td>
                <td><?= h($eventos->autor) ?></td>
                <td><?= h($eventos->ficha_tecnica) ?></td>
                <td><?= h($eventos->sinopse) ?></td>
                <td><?= h($eventos->release_com) ?></td>
                <td><?= h($eventos->faixa_etaria_id) ?></td>
                <td><?= h($eventos->links_com) ?></td>
                <td><?= h($eventos->produtor_id) ?></td>
                <td><?= h($eventos->usuario_id) ?></td>
                <td><?= h($eventos->instituicao_id) ?></td>
                <td><?= h($eventos->data_envio) ?></td>
                <td><?= h($eventos->ocupacao) ?></td>
                <td><?= h($eventos->publicado) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Visualizar'), ['controller' => 'Eventos', 'action' => 'view', $eventos->id]) ?>

                    <?= $this->Html->link(__('Editar'), ['controller' => 'Eventos', 'action' => 'edit', $eventos->id]) ?>

                    <?= $this->Form->postLink(__('Excluir'), ['controller' => 'Eventos', 'action' => 'delete', $eventos->id], ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $eventos->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related {0}', ['Formacao Vigencias']) ?></h4>
        <?php if (!empty($usuario->formacao_vigencias)): ?>
        <table class="table table-striped table-hover">
            <tr>
                <th>Id</th>
                <th>Periodo</th>
                <th>Valor</th>
                <th>Valor Por Extenso</th>
                <th>Usuario Id</th>
                <th>Descricao</th>
                <th>Ano</th>
                <th>Publicado</th>
                <th class="actions"><?= __('Ação') ?></th>
            </tr>
            <?php foreach ($usuario->formacao_vigencias as $formacaoVigencias): ?>
            <tr>
                <td><?= h($formacaoVigencias->id) ?></td>
                <td><?= h($formacaoVigencias->periodo) ?></td>
                <td><?= h($formacaoVigencias->valor) ?></td>
                <td><?= h($formacaoVigencias->valor_por_extenso) ?></td>
                <td><?= h($formacaoVigencias->usuario_id) ?></td>
                <td><?= h($formacaoVigencias->descricao) ?></td>
                <td><?= h($formacaoVigencias->ano) ?></td>
                <td><?= h($formacaoVigencias->publicado) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Visualizar'), ['controller' => 'FormacaoVigencias', 'action' => 'view', $formacaoVigencias->id]) ?>

                    <?= $this->Html->link(__('Editar'), ['controller' => 'FormacaoVigencias', 'action' => 'edit', $formacaoVigencias->id]) ?>

                    <?= $this->Form->postLink(__('Excluir'), ['controller' => 'FormacaoVigencias', 'action' => 'delete', $formacaoVigencias->id], ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $formacaoVigencias->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related {0}', ['Formacaos']) ?></h4>
        <?php if (!empty($usuario->formacaos)): ?>
        <table class="table table-striped table-hover">
            <tr>
                <th>Id</th>
                <th>Ano</th>
                <th>Pessoa Fisica Id</th>
                <th>Local1 Id</th>
                <th>Local2 Id</th>
                <th>Local3 Id</th>
                <th>Cargo Id</th>
                <th>Vigencia Id</th>
                <th>Coordenadoria Id</th>
                <th>Programa Id</th>
                <th>Linguagem Id</th>
                <th>Projeto Id</th>
                <th>Chamados</th>
                <th>Status</th>
                <th>Pontuacao</th>
                <th>Observacao</th>
                <th>Numero Processo Pagamento</th>
                <th>Usuario Id</th>
                <th>Subprefeitura</th>
                <th>Fiscal</th>
                <th>Suplente</th>
                <th>Territorio</th>
                <th>Verba</th>
                <th>Data Envio</th>
                <th>Publicado</th>
                <th class="actions"><?= __('Ação') ?></th>
            </tr>
            <?php foreach ($usuario->formacaos as $formacaos): ?>
            <tr>
                <td><?= h($formacaos->id) ?></td>
                <td><?= h($formacaos->ano) ?></td>
                <td><?= h($formacaos->pessoa_fisica_id) ?></td>
                <td><?= h($formacaos->local1_id) ?></td>
                <td><?= h($formacaos->local2_id) ?></td>
                <td><?= h($formacaos->local3_id) ?></td>
                <td><?= h($formacaos->cargo_id) ?></td>
                <td><?= h($formacaos->vigencia_id) ?></td>
                <td><?= h($formacaos->coordenadoria_id) ?></td>
                <td><?= h($formacaos->programa_id) ?></td>
                <td><?= h($formacaos->linguagem_id) ?></td>
                <td><?= h($formacaos->projeto_id) ?></td>
                <td><?= h($formacaos->chamados) ?></td>
                <td><?= h($formacaos->status) ?></td>
                <td><?= h($formacaos->pontuacao) ?></td>
                <td><?= h($formacaos->observacao) ?></td>
                <td><?= h($formacaos->numero_processo_pagamento) ?></td>
                <td><?= h($formacaos->usuario_id) ?></td>
                <td><?= h($formacaos->subprefeitura) ?></td>
                <td><?= h($formacaos->fiscal) ?></td>
                <td><?= h($formacaos->suplente) ?></td>
                <td><?= h($formacaos->territorio) ?></td>
                <td><?= h($formacaos->verba) ?></td>
                <td><?= h($formacaos->data_envio) ?></td>
                <td><?= h($formacaos->publicado) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Visualizar'), ['controller' => 'Formacaos', 'action' => 'view', $formacaos->id]) ?>

                    <?= $this->Html->link(__('Editar'), ['controller' => 'Formacaos', 'action' => 'edit', $formacaos->id]) ?>

                    <?= $this->Form->postLink(__('Excluir'), ['controller' => 'Formacaos', 'action' => 'delete', $formacaos->id], ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $formacaos->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related {0}', ['Historicos']) ?></h4>
        <?php if (!empty($usuario->historicos)): ?>
        <table class="table table-striped table-hover">
            <tr>
                <th>Id</th>
                <th>Evento Id</th>
                <th>Tabela</th>
                <th>Campo</th>
                <th>Data</th>
                <th>Valor</th>
                <th>Usuario Id</th>
                <th>Ip</th>
                <th>Data Abertura</th>
                <th class="actions"><?= __('Ação') ?></th>
            </tr>
            <?php foreach ($usuario->historicos as $historicos): ?>
            <tr>
                <td><?= h($historicos->id) ?></td>
                <td><?= h($historicos->evento_id) ?></td>
                <td><?= h($historicos->tabela) ?></td>
                <td><?= h($historicos->campo) ?></td>
                <td><?= h($historicos->data) ?></td>
                <td><?= h($historicos->valor) ?></td>
                <td><?= h($historicos->usuario_id) ?></td>
                <td><?= h($historicos->ip) ?></td>
                <td><?= h($historicos->data_abertura) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Visualizar'), ['controller' => 'Historicos', 'action' => 'view', $historicos->id]) ?>

                    <?= $this->Html->link(__('Editar'), ['controller' => 'Historicos', 'action' => 'edit', $historicos->id]) ?>

                    <?= $this->Form->postLink(__('Excluir'), ['controller' => 'Historicos', 'action' => 'delete', $historicos->id], ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $historicos->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related {0}', ['Logs']) ?></h4>
        <?php if (!empty($usuario->logs)): ?>
        <table class="table table-striped table-hover">
            <tr>
                <th>Id</th>
                <th>Usuario Id</th>
                <th>Data Log</th>
                <th>Endereco Ip</th>
                <th>Descricao</th>
                <th class="actions"><?= __('Ação') ?></th>
            </tr>
            <?php foreach ($usuario->logs as $logs): ?>
            <tr>
                <td><?= h($logs->id) ?></td>
                <td><?= h($logs->usuario_id) ?></td>
                <td><?= h($logs->data_log) ?></td>
                <td><?= h($logs->endereco_ip) ?></td>
                <td><?= h($logs->descricao) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Visualizar'), ['controller' => 'Logs', 'action' => 'view', $logs->id]) ?>

                    <?= $this->Html->link(__('Editar'), ['controller' => 'Logs', 'action' => 'edit', $logs->id]) ?>

                    <?= $this->Form->postLink(__('Excluir'), ['controller' => 'Logs', 'action' => 'delete', $logs->id], ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $logs->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related {0}', ['Pessoa Fisicas']) ?></h4>
        <?php if (!empty($usuario->pessoa_fisicas)): ?>
        <table class="table table-striped table-hover">
            <tr>
                <th>Id</th>
                <th>Foto</th>
                <th>Nome</th>
                <th>Nome Artistico</th>
                <th>Tipo Documento Id</th>
                <th>Rg</th>
                <th>Cpf</th>
                <th>Ccm</th>
                <th>Estado Civil Id</th>
                <th>Data Nascimento</th>
                <th>Nacionalidade</th>
                <th>Cep</th>
                <th>Numero</th>
                <th>Complemento</th>
                <th>Telefone1</th>
                <th>Telefone2</th>
                <th>Telefone3</th>
                <th>Email</th>
                <th>Drt</th>
                <th>Funcao</th>
                <th>Cbo</th>
                <th>Nit</th>
                <th>Pis</th>
                <th>Omb</th>
                <th>Banco Id</th>
                <th>Agencia</th>
                <th>Conta</th>
                <th>Observacao</th>
                <th>Data Atualizacao</th>
                <th>Evento Id</th>
                <th>Usuario Id</th>
                <th class="actions"><?= __('Ação') ?></th>
            </tr>
            <?php foreach ($usuario->pessoa_fisicas as $pessoaFisicas): ?>
            <tr>
                <td><?= h($pessoaFisicas->id) ?></td>
                <td><?= h($pessoaFisicas->foto) ?></td>
                <td><?= h($pessoaFisicas->nome) ?></td>
                <td><?= h($pessoaFisicas->nome_artistico) ?></td>
                <td><?= h($pessoaFisicas->tipo_documento_id) ?></td>
                <td><?= h($pessoaFisicas->rg) ?></td>
                <td><?= h($pessoaFisicas->cpf) ?></td>
                <td><?= h($pessoaFisicas->ccm) ?></td>
                <td><?= h($pessoaFisicas->estado_civil_id) ?></td>
                <td><?= h($pessoaFisicas->data_nascimento) ?></td>
                <td><?= h($pessoaFisicas->nacionalidade) ?></td>
                <td><?= h($pessoaFisicas->cep) ?></td>
                <td><?= h($pessoaFisicas->numero) ?></td>
                <td><?= h($pessoaFisicas->complemento) ?></td>
                <td><?= h($pessoaFisicas->telefone1) ?></td>
                <td><?= h($pessoaFisicas->telefone2) ?></td>
                <td><?= h($pessoaFisicas->telefone3) ?></td>
                <td><?= h($pessoaFisicas->email) ?></td>
                <td><?= h($pessoaFisicas->drt) ?></td>
                <td><?= h($pessoaFisicas->funcao) ?></td>
                <td><?= h($pessoaFisicas->cbo) ?></td>
                <td><?= h($pessoaFisicas->nit) ?></td>
                <td><?= h($pessoaFisicas->pis) ?></td>
                <td><?= h($pessoaFisicas->omb) ?></td>
                <td><?= h($pessoaFisicas->banco_id) ?></td>
                <td><?= h($pessoaFisicas->agencia) ?></td>
                <td><?= h($pessoaFisicas->conta) ?></td>
                <td><?= h($pessoaFisicas->observacao) ?></td>
                <td><?= h($pessoaFisicas->data_atualizacao) ?></td>
                <td><?= h($pessoaFisicas->evento_id) ?></td>
                <td><?= h($pessoaFisicas->usuario_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Visualizar'), ['controller' => 'PessoaFisicas', 'action' => 'view', $pessoaFisicas->id]) ?>

                    <?= $this->Html->link(__('Editar'), ['controller' => 'PessoaFisicas', 'action' => 'edit', $pessoaFisicas->id]) ?>

                    <?= $this->Form->postLink(__('Excluir'), ['controller' => 'PessoaFisicas', 'action' => 'delete', $pessoaFisicas->id], ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $pessoaFisicas->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related {0}', ['Pessoa Juridicas']) ?></h4>
        <?php if (!empty($usuario->pessoa_juridicas)): ?>
        <table class="table table-striped table-hover">
            <tr>
                <th>Id</th>
                <th>Razao Social</th>
                <th>Cnpj</th>
                <th>Ccm</th>
                <th>Cep</th>
                <th>Numero</th>
                <th>Complemento</th>
                <th>Telefone1</th>
                <th>Telefone2</th>
                <th>Telefone3</th>
                <th>Email</th>
                <th>Representante Legal1 Id</th>
                <th>Representante Legal2 Id</th>
                <th>Banco Id</th>
                <th>Agencia</th>
                <th>Conta</th>
                <th>Observacao</th>
                <th>Usuario Id</th>
                <th>Evento Id</th>
                <th>Data Atualizacao</th>
                <th class="actions"><?= __('Ação') ?></th>
            </tr>
            <?php foreach ($usuario->pessoa_juridicas as $pessoaJuridicas): ?>
            <tr>
                <td><?= h($pessoaJuridicas->id) ?></td>
                <td><?= h($pessoaJuridicas->razao_social) ?></td>
                <td><?= h($pessoaJuridicas->cnpj) ?></td>
                <td><?= h($pessoaJuridicas->ccm) ?></td>
                <td><?= h($pessoaJuridicas->cep) ?></td>
                <td><?= h($pessoaJuridicas->numero) ?></td>
                <td><?= h($pessoaJuridicas->complemento) ?></td>
                <td><?= h($pessoaJuridicas->telefone1) ?></td>
                <td><?= h($pessoaJuridicas->telefone2) ?></td>
                <td><?= h($pessoaJuridicas->telefone3) ?></td>
                <td><?= h($pessoaJuridicas->email) ?></td>
                <td><?= h($pessoaJuridicas->representante_legal1_id) ?></td>
                <td><?= h($pessoaJuridicas->representante_legal2_id) ?></td>
                <td><?= h($pessoaJuridicas->banco_id) ?></td>
                <td><?= h($pessoaJuridicas->agencia) ?></td>
                <td><?= h($pessoaJuridicas->conta) ?></td>
                <td><?= h($pessoaJuridicas->observacao) ?></td>
                <td><?= h($pessoaJuridicas->usuario_id) ?></td>
                <td><?= h($pessoaJuridicas->evento_id) ?></td>
                <td><?= h($pessoaJuridicas->data_atualizacao) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Visualizar'), ['controller' => 'PessoaJuridicas', 'action' => 'view', $pessoaJuridicas->id]) ?>

                    <?= $this->Html->link(__('Editar'), ['controller' => 'PessoaJuridicas', 'action' => 'edit', $pessoaJuridicas->id]) ?>

                    <?= $this->Form->postLink(__('Excluir'), ['controller' => 'PessoaJuridicas', 'action' => 'delete', $pessoaJuridicas->id], ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $pessoaJuridicas->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related {0}', ['Times']) ?></h4>
        <?php if (!empty($usuario->times)): ?>
        <table class="table table-striped table-hover">
            <tr>
                <th>Id</th>
                <th>Usuario Id</th>
                <th>Time</th>
                <th>Ip</th>
                <th class="actions"><?= __('Ação') ?></th>
            </tr>
            <?php foreach ($usuario->times as $times): ?>
            <tr>
                <td><?= h($times->id) ?></td>
                <td><?= h($times->usuario_id) ?></td>
                <td><?= h($times->time) ?></td>
                <td><?= h($times->ip) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Visualizar'), ['controller' => 'Times', 'action' => 'view', $times->id]) ?>

                    <?= $this->Html->link(__('Editar'), ['controller' => 'Times', 'action' => 'edit', $times->id]) ?>

                    <?= $this->Form->postLink(__('Excluir'), ['controller' => 'Times', 'action' => 'delete', $times->id], ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $times->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related {0}', ['Verifica Producaos']) ?></h4>
        <?php if (!empty($usuario->verifica_producaos)): ?>
        <table class="table table-striped table-hover">
            <tr>
                <th>Id</th>
                <th>Evento Id</th>
                <th>Usuario Id</th>
                <th>Instituicao Id</th>
                <th>Status</th>
                <th class="actions"><?= __('Ação') ?></th>
            </tr>
            <?php foreach ($usuario->verifica_producaos as $verificaProducaos): ?>
            <tr>
                <td><?= h($verificaProducaos->id) ?></td>
                <td><?= h($verificaProducaos->evento_id) ?></td>
                <td><?= h($verificaProducaos->usuario_id) ?></td>
                <td><?= h($verificaProducaos->instituicao_id) ?></td>
                <td><?= h($verificaProducaos->status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Visualizar'), ['controller' => 'VerificaProducaos', 'action' => 'view', $verificaProducaos->id]) ?>

                    <?= $this->Html->link(__('Editar'), ['controller' => 'VerificaProducaos', 'action' => 'edit', $verificaProducaos->id]) ?>

                    <?= $this->Form->postLink(__('Excluir'), ['controller' => 'VerificaProducaos', 'action' => 'delete', $verificaProducaos->id], ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $verificaProducaos->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related {0}', ['Locals']) ?></h4>
        <?php if (!empty($usuario->locals)): ?>
        <table class="table table-striped table-hover">
            <tr>
                <th>Id</th>
                <th>Instituicao Id</th>
                <th>Local</th>
                <th>Rider</th>
                <th>Publicado</th>
                <th class="actions"><?= __('Ação') ?></th>
            </tr>
            <?php foreach ($usuario->locals as $locals): ?>
            <tr>
                <td><?= h($locals->id) ?></td>
                <td><?= h($locals->instituicao_id) ?></td>
                <td><?= h($locals->local) ?></td>
                <td><?= h($locals->rider) ?></td>
                <td><?= h($locals->publicado) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Visualizar'), ['controller' => 'Locals', 'action' => 'view', $locals->id]) ?>

                    <?= $this->Html->link(__('Editar'), ['controller' => 'Locals', 'action' => 'edit', $locals->id]) ?>

                    <?= $this->Form->postLink(__('Excluir'), ['controller' => 'Locals', 'action' => 'delete', $locals->id], ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $locals->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related {0}', ['Modulos']) ?></h4>
        <?php if (!empty($usuario->modulos)): ?>
        <table class="table table-striped table-hover">
            <tr>
                <th>Id</th>
                <th>Modulo</th>
                <th>Link Pagina</th>
                <th>Descricao</th>
                <th class="actions"><?= __('Ação') ?></th>
            </tr>
            <?php foreach ($usuario->modulos as $modulos): ?>
            <tr>
                <td><?= h($modulos->id) ?></td>
                <td><?= h($modulos->modulo) ?></td>
                <td><?= h($modulos->link_pagina) ?></td>
                <td><?= h($modulos->descricao) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Visualizar'), ['controller' => 'Modulos', 'action' => 'view', $modulos->id]) ?>

                    <?= $this->Html->link(__('Editar'), ['controller' => 'Modulos', 'action' => 'edit', $modulos->id]) ?>

                    <?= $this->Form->postLink(__('Excluir'), ['controller' => 'Modulos', 'action' => 'delete', $modulos->id], ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $modulos->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related {0}', ['Verbas']) ?></h4>
        <?php if (!empty($usuario->verbas)): ?>
        <table class="table table-striped table-hover">
            <tr>
                <th>Id</th>
                <th>Verba</th>
                <th>Pai</th>
                <th>Instituicao Id</th>
                <th>Pf</th>
                <th>Pj</th>
                <th>Premio</th>
                <th>Dotacao Orcamentaria</th>
                <th>Multiplo</th>
                <th>Do Pf</th>
                <th>DoPj</th>
                <th>Do Premio</th>
                <th>Detalhamento Acao</th>
                <th>Numero Reserva Pj</th>
                <th>Link Pj</th>
                <th>Numero Reserva Pf</th>
                <th>Link Pf</th>
                <th>Numero Reserva Encargos</th>
                <th>Vocativo</th>
                <th>Setor Vocativo</th>
                <th class="actions"><?= __('Ação') ?></th>
            </tr>
            <?php foreach ($usuario->verbas as $verbas): ?>
            <tr>
                <td><?= h($verbas->id) ?></td>
                <td><?= h($verbas->verba) ?></td>
                <td><?= h($verbas->pai) ?></td>
                <td><?= h($verbas->instituicao_id) ?></td>
                <td><?= h($verbas->pf) ?></td>
                <td><?= h($verbas->pj) ?></td>
                <td><?= h($verbas->premio) ?></td>
                <td><?= h($verbas->dotacao_orcamentaria) ?></td>
                <td><?= h($verbas->multiplo) ?></td>
                <td><?= h($verbas->do_pf) ?></td>
                <td><?= h($verbas->doPj) ?></td>
                <td><?= h($verbas->do_premio) ?></td>
                <td><?= h($verbas->detalhamento_acao) ?></td>
                <td><?= h($verbas->numero_reserva_pj) ?></td>
                <td><?= h($verbas->link_pj) ?></td>
                <td><?= h($verbas->Numero_reserva_pf) ?></td>
                <td><?= h($verbas->link_pf) ?></td>
                <td><?= h($verbas->numero_reserva_encargos) ?></td>
                <td><?= h($verbas->vocativo) ?></td>
                <td><?= h($verbas->setor_vocativo) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Visualizar'), ['controller' => 'Verbas', 'action' => 'view', $verbas->id]) ?>

                    <?= $this->Html->link(__('Editar'), ['controller' => 'Verbas', 'action' => 'edit', $verbas->id]) ?>

                    <?= $this->Form->postLink(__('Excluir'), ['controller' => 'Verbas', 'action' => 'delete', $verbas->id], ['confirm' => __('Você tem certeza que deseja excluir # {0}?', $verbas->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
</div>
