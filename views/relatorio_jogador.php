<div class="card shadow-sm border-0 border-top border-info border-4 mt-4">
    <div class="card-header bg-white d-flex justify-content-between align-itemns-center">
        <h4 class="m-0 text-info">
            Relatório Oficial: Atletas Elegíveis
        </h4>
    </div>

    <div class="card-body p-0">

    <button class="btn btn-sm btn-warning m-2 btn-outline-secondary" onclick="window.print()">Imprimir PDF</button>
        <table class="table table-hover align-middle m-0">
            <thead class="table-light">
                <tr>
                    <th>Nome do Atleta</th>
                    <th>Posição Tática</th>
                    <th>Seleção / País</th>
                    <th>Status</th>
                </tr>
            </thead>

            <tbody>
                <?php if(empty($jogadores)): ?>

                    <tr>
                        <td colspan="4" class="text-muted text-center py-4">Nenhum Jogador apto/ativo encontrado.</td>
                    </tr>

                    <?php foreach($jogadores as $jog): ?>

                        <td class="fw-bold"><?= htmlspecialchars($jog['nome']) ?></td>

                        <td><?= htmlspecialchars($jog['posicao']) ?></td>

                        <td><?= htmlspecialchars($jog['pais']) ?></td>

                        <td><span class="badge bg-success">Regularizado</span></td>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>