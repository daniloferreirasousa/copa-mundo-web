<div class="card shadow-sm border-0">
    <div class="card-header bg-success text-white border-bottom border-warning border-3 d-flex justify-content-between align-items-center">
        <h4 class="m-0">Inscrição de Atletas & Estatísticas Clínicas</h4>
        <span class="badge badge-gold px-3 py-2">FIFA Global Roster</span>
    </div>
    <div class="card-body p-0">
        <a href="?url=jogador/ativos" class="btn btn-sm btn-info m-2">Jogadores Ativos</a>
        <div class="table-responsive">
            <table class="table table-hover m-0 align-middle">
                <thead class="table-dark">
                    <tr>
                        <th class="ps-4">Atleta</th>
                        <th>Posição</th>
                        <th class="text-center">Camisa</th>
                        <th>Seleção</th>
                        <th>Contatos (1FN)</th>
                        <th class="text-center">Cartões (Ocorrência)</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($jogadores as $jog): ?>
                        <tr>
                            <td class="fw-bold text-dark">
                                <?= htmlspecialchars($jog['nome_jogador']) ?>
                                <small class="text-muted">
                                    Reg: FIFA-<?= $jog['id_jogador'] ?>
                                </small>
                            </td>

                            <td><span class="badge bg-secondary">
                                <?= htmlspecialchars($jog['posicao']) ?>
                            </span></td>

                            <td class="text-center fw-bold text-primary fs-5">
                                #<?= $jog['numero_camisa'] ?>
                            </td>

                            <td class="fw-bold text-success">
                                <?= htmlspecialchars($jog['pais_da_selecao']) ?>
                            </td>
                            <td><small class="font-monospace text-muted">
                                <?= htmlspecialchars($jog['telefones_contato']) ?>
                            </small></td>

                            <td class="text-center">
                                <?php if ($jog['cartao_recebido'] == "Amarelo"): ?>
                                    <span class="badge bg-warning text-dark px-2 py-2">🟨 Amarelo (<?=  $jog['minuto_jogo'] ?>')</span>
                                <?php elseif($jog['cartao_recebido'] == "Vermelho"): ?>
                                    <span class="badge bg-danger text-dark px-2 py-2">🟥 Vermelho (<?=  $jog['minuto_jogo'] ?>')</span>
                                <?php else: ?>
                                    <span class="badge bg-light text-muted border px-2 py-2">Nenhum</span>
                                <?php endif; ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>