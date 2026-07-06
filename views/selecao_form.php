<?php

// Verifica se estamos editando ou criando um registro
$isEdit = isset($selecao);
$actionUrl = $isEdit ? "?url=selecao/update/" . $selecao['id_selecao'] : "?url=selecao/store"; 
?>

<div class="card shadow-sm border-0">
    <div class="card-header bg-dark text-white">
        <h4 class="m-0">
            <?= $isEdit ? 'Editar Seleção' : 'Cadastrar Nova Seleção' ?>
        </h4>
    </div>

    <div class="card-body">
        <form action="<?= $actionUrl ?>" method="post">
            <div class="row mb-3">
                <div class="col-md-6">
                    <label class="form-label fw-bold">País</label>
                    <input type="text" name="pais" class="form-control" value="<?= $isEdit ? $selecao['pais'] : '' ?>" required>
                </div>
                <div class="col-md-6">
                    <label class="form-label fw-bold">Técnico</label>
                    <input type="text" name="tecnico" class="form-control" value="<?= $isEdit ? $selecao['tecnico'] : '' ?>" required>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-md-6">
                    <label class="form-label fw-bold">Grupo (A-H)</label>
                    <input type="text" name="grupo" class="form-control" maxlenght="1" value="<?= $isEdit ? $selecao['grupo'] : '' ?>" required>
                </div>
                <div class="col-md-6">
                    <label class="form-label fw-bold">Títulos Mundiais</label>
                    <input type="number" min="0" name="titulos" class="form-control" value="<?= $isEdit ? $selecao['titulos_mundiais'] : '0' ?>" required>
                </div>
            </div>

            <button class="btn btn-success fw-bold">
                <?=  $isEdit ? 'Atualizar Dados' : 'Salvar Seleção'?>
            </button>

            <a href="?url=selecao/index" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</div>