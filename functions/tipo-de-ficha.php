<?php 

function get_group_data_by_tipoDeFicha() {
    $tipoDeFicha = get_field('tipoDeFicha');
    switch ($tipoDeFicha) {
        case "Livro":
        case "Audiovisual":
            return get_field('livros');

        case "Capítulo de Livro":
            return get_field('capitulos_de_livros');

        case "Artigo em periódico":
            return get_field('artigos_periodicos');

        case "Artigo em anais":
            return get_field('artigos_anais');

        case "Tese":
        case "Dissertação":
        case "Monografia":
        case "Relatório de pesquisa":
            return get_field('teses_dissertacoes_monografias_relatorios');

        case "Hemeroteca":
            return get_field('hemeroteca');

        case "Ficha Genérica":
            return get_field('ficha_generica');

        default:
            return null; // Retorno padrão caso o tipo não seja reconhecido.
    }
}