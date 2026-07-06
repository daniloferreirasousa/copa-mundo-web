<div class="card shadow-sm border-0">
    <div class="card-header bg-dark text-warning d-flex justify-content-between align-items-center">
        <h4 class="m-0">Sedes Oficiais e Complexos</h4>
    </div>

    <div class="card-body p-0">
        <table class="table table-striped m-0 align-middle">
            <thead class="table-light">
                <tr>
                    <th class="ps-4">
                        Complexo Esportivo / Estadio
                    </th>

                    <th>Cidade Sede</th>

                    <th>País / Região</th>

                    <th class="text-end pe-4">Capacidade Máxima</th>
                </tr>
            </thead>
            
            <tbody>
                <?php foreach ($estadios as $est): ?>
                    <tr>
                        <td class="ps-4 fw-bold text-dark">
                            <?= htmlspecialchars($est['estadio'])?>
                        </td>

                        <td>
                            <?= htmlspecialchars($est['cidade']) ?>
                        </td>

                        <td class="badge bg-light text-dark.border">
                            <?= htmlspecialchars($est['estado_pais'])?>
                        </td>

                        <td class="text-end pe-4 fw-bold text-monospace text-primary">
                            <?= number_format($est['capacidade'], 0, ',', '.')?> Assentos
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>