<div class="card shadow-sm border-0">
    <div class="card-header card-fifa-header d-flex justify-content-between align-items-center">
        <h4 class="m-0">Delegados & Seleções Cadastradas</h4>
        <span class="badge bg-light text-dark fw-bold">
            <?= count($selecoes)?> Países Ativos
        </span>
    </div>

    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-striped table-hover m-0 align-middle">
                <thead class="table-dark">
                    <tr>
                        <th class="ps-4">Código Interno (PK)</th>
                        <th>Nação Filiada</th>
                        <th>Treinador</th>
                        <th class="text-center">Grupo da Copa</th>
                    </tr>
                </thead>

                <tbody>
                    <?php if (empty($selecoes)) :?>
                        <tr>
                            <td colspan="4" class="text-center p-4 text-muted">
                                Nenhuma seleção localizada no banco de dados.
                            </td>
                        </tr>
                    <?php else: ?>
                        <?php foreach($selecoes as $sel): ?>
                            <tr>
                                <td class="ps-4 fw-bold text-secondary">#00<?= $sel['id_selecao'] ?></td>
                                <td class="fw-bold text-dark">
                                    <?= htmlspecialchars($sel['pais']) ?>
                                </td>
                                <td class="text-center">
                                    <span class="badge bg-primary px-3 py-2 fs-6">
                                        <?= htmlspecialchars($sel['grupo']) ?>
                                    </span>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>