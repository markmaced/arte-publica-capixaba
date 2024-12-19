<?php
function get_items_by_region($region)
{
    global $urlapi;

    $regions = [
        'Região Metropolitana' => ['Vitória', 'Vila Velha', 'Serra', 'Cariacica', 'Viana', 'Guarapari', 'Fundão'],
        'Região Nordeste' => ['Aracruz', 'Conceição da Barra', 'Ibiraçu', 'Jaguaré', 'João Neiva', 'Linhares', 'Rio Bananal', 'São Mateus', 'Sooretama'],
        'Região Noroeste' => ['Água Doce do Norte', 'Águia Branca', 'Alto Rio Novo', 'Baixo Guandu', 'Barra de São Francisco', 'Colatina', 'Governador Lindenberg', 'Itaguaçu', 'Itarana', 'Laranja da Terra', 'Mantenópolis', 'Marilândia', 'Nova Venécia', 'Pancas', 'São Domingos do Norte', 'São Gabriel da Palha', 'São Roque do Canaã', 'Vila Pavão', 'Vila Valério'],
        'Litoral Norte' => ['Boa Esperança', 'Ecoporanga', 'Montanha', 'Mucurici', 'Pedro Canário', 'Pinheiros'],
        'Região Sudoeste' => ['Alegre', 'Apiacá', 'Atilio Vivacqua', 'Bom Jesus do Norte', 'Cachoeiro de Itapemirim', 'Castelo', 'Divino de São Lourenço', 'Dores do Rio Preto', 'Guaçuí', 'Ibitirama', 'Iúna', 'Jerônimo Monteiro', 'Muniz Freire', 'Muqui'],
        'Região Central' => ['Domingos Martins', 'Marechal Floriano', 'Santa Maria de Jetibá', 'Santa Leopoldina', 'Venda Nova do Imigrante'],
        'Litoral Sul' => ['Anchieta', 'Iconha', 'Itapemirim', 'Marataízes', 'Piúma', 'Presidente Kennedy']
    ];

    // Verifica se a região existe no array
    if (!isset($regions[$region])) {
        return "Região inválida.";
    }

    // Obtém as cidades da região
    $regionCities = $regions[$region];

    // Obtém as collections do Tainacan
    $collections = search_collections_api();

    // Array para armazenar os itens da região
    $itemsByRegion = [];

    foreach ($collections as $collection) {
        if (isset($collection->name) && in_array($collection->name, $regionCities)) {
            $itemsByRegion[] = [
                'id' => $collection->id,
                'name' => $collection->name,
                'slug' => $collection->slug
            ];
        }
    }
    log_to_file(print_r($itemsByRegion , true));
    return $itemsByRegion;
}