<?php
/**
 * ###############################################
 *
 * SWIFT Framework
 * _______________________________________________
 *
 * @author		Varun Shoor
 *
 * @package		SWIFT
 * @copyright	Copyright (c) 2001-2012, Kayako
 * @license		http://www.kayako.com/license
 * @link		http://www.kayako.com
 *
 * ###############################################
 */

$__LANG = array(
	'titlemasterviewdel' => 'Não é possível excluir a (s) "%d"',
	'msgmasterviewdel' => 'Não é possível ao Kayako eliminar a(s) seguinte(s) views(s) de pedido de suporte principal:',
	'manageviews' => 'Visualizações',
	'insertview' => 'Inserir o modo de exibição',
	'viewtitle' => 'Título da vista do pedido de suporte',
	'desc_viewtitle' => 'Digite um título para o modo de exibição (números, letras e espaços somente).',
	'viewscope' => 'Escopo de visão',
	'createdby' => 'Criador',
	'editview' => 'Editar Exibição',
	'titleticketviewinsert' => 'Vista do bilhete (%s) criada',
	'msgticketviewinsert' => 'A vista do pedido de suporte (%s) foi criada com sucesso.',
	'titleticketviewupdate' => 'Vista de pedido de suporte (%s) atualizada',
	'msgticketviewupdate' => 'A vista do pedido de suporte (%s) foi atualizada com sucesso.',
	'titleviewfieldempty' => 'Não foram especificadas colunas de visualização de pedidos de suporte',
	'msgviewfieldempty' => 'Necessita de especificar pelo menos uma coluna para a vista de pedidos de suporte (caso contrário, não haverá o que apresentar!).',

	'viewlinkdepartment' => 'Associar esta vista aos departamentos',
	'desc_viewlinkdepartment' => 'Esta vista pode ser automaticamente carregada ao pesquisar pedidos de suporte num dos departamentos selecionados aqui.',

	'taboptions' => 'Opções',
	'tabcolumns' => 'Colunas',

	'viewscope_global' => 'Todo o pessoal',
	'viewscope_private' => 'Apenas eu',
	'viewscope_team' => 'A minha equipa',

	'viewunassigned' => 'Não atribuído',
	'viewassigned' => 'Atribuído a mim',
	'viewalltickets' => 'Todos os pedidos de suporte',

	'viewassignedfield' => 'Apresentar pedidos de suporte que são atribuídos a',
	'desc_viewassignedfield' => '<strong>Não atribuído</strong> Pedidos que não são atribuídos.<br /><strong>Atribuído a mim</strong> Pedidos de suporte que lhe são atribuídos.<br /><strong>Todos os pedidos de suporte</strong> Todos os pedidos de suporte, independentemente de serem atribuídos a si, outra pessoa ou a ninguém.',
	'viewscope' => 'Visibilidade',
	'desc_viewscope' => '<strong>Todo o pessoal</strong> Todo o pessoal poderá utilizar esta vista.<br /><strong>Apenas eu</strong> A vista só estará disponível para si.<br /><strong>A minha equipa</strong> A vista estará disponível para si e os outros elementos da sua equipa.',

	'viewselectfields' => 'Selecionar colunas (arrastar, largar e organizar na caixa amarela)',
	'viewsortoptions' => 'Opções de ordenação',
	'viewsortby' => 'Ordenar por',
	'desc_viewsortby' => 'Inicialmente, como serão os pedidos de suporte ordenados aquando da utilização desta vista?',
	'viewsortorder' => 'Sequência de ordenação',
	'desc_viewsortorder' => 'Os pedidos de suporte podem ser ordenados por ordem ascendente (do menor para o maior, mais recente para menos recente, etc.) ou por ordem descendente.',
	'viewticketsperpage' => 'Pedidos de suporte a apresentar por página',
	'desc_viewticketsperpage' => 'Especifique o número máximo de pedidos de suporte a apresentar por página (antes de serem divididos por várias páginas).',
	'generaloptions' => 'Opções gerais',
	'viewautorefresh' => 'Atualizar automaticamente a listagem de pedidos de suporte',
	'desc_viewautorefresh' => 'Quando esta vista é carregada, a listagem de pedidos de suporte pode ser automaticamente atualizada. Útil para utilizações tipo placa.',
	'autorefresh_disable' => '-- Desativar atualização automática --',
	'autorefresh_30s' => 'Atualizar a cada 30 segundos',
	'autorefresh_1m' => 'Atualizar a cada minuto',
	'autorefresh_5m' => 'Atualizar a cada 5 minutos',
	'autorefresh_15m' => 'Atualizar a cada 15 minutos',
	'autorefresh_30m' => 'Atualizar a cada 30 minutos',
	'autorefresh_1h' => 'Atualizar a cada hora',
	'viewsetasowner' => 'Definir automaticamente o proprietário do pedido de suporte como funcionário ativo',
	'desc_viewsetasowner' => 'Caso esta vista esteja em utilização, ao responder ou reencaminhar um pedido de suporte, o proprietário do pedido de suporte será automaticamente definido como o funcionário ativo.',
	'viewdefaultstatusonreply' => 'Estado de pedido de suporte predefinido ao responder a um pedido de suporte',
	'desc_viewdefaultstatusonreply' => 'Especifique o estado para o qual um pedido de suporte deve ser automaticamente definido quando um funcionário que está a utilizar esta vista responde a um pedido de suporte ou reencaminha o mesmo.',
	'defaultstatus_unspecified' => '-- Não especificado --',

	'afterreply_topticketlist' => 'Lista de pedidos de suporte de nível superior (ver todos os pedidos de suporte)',
	'afterreply_activeticketlist' => 'Lista de pedidos de suporte ativos (no departamento atual ou resultados da pesquisa)',
	'afterreply_ticket' => 'O pedido de suporte ativo',
	'afterreply_nextticket' => 'Próximo pedido de suporte disponível',
	'viewafterreplyaction' => 'Após responder a um pedido de suporte, leve-me para',
	'desc_viewafterreplyaction' => 'Selecione para onde Kayako o deve levar (ou a quem estiver a utilizar esta vista) após responder a um pedido de suporte ou reencaminhar o mesmo.',

	'sort_asc' => 'Ascendente',
	'sort_desc' => 'Descendente',

	// Potentialy unused phrases in staff_ticketview.php
	'viewfilteroptions' => 'Filter Options',
	'viewfilterdepartments' => 'Filter Department(s)',
	'desc_viewfilterdepartments' => 'Kayako by default will display tickets from all/selected department. However, you can use this option to filter the tickets based on the selected departments.',
	'viewfiltertype' => 'Filter Ticket Type(s)',
	'desc_viewfiltertype' => 'You can use this option to filter the tickets based on the selected ticket type(s).',
	'viewfilterstatus' => 'Filter Ticket Status(es)',
	'desc_viewfilterstatus' => 'You can use this option to filter the tickets based on the selected ticket status(es).',
);
?>
