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

$__LANG = array (
	'troubleshooter' => 'Solução de problemas',

	// Manage Categories
	'categories' => 'Categorias',
	'managecategories' => 'Gerenciar Categorias',
	'desc_troubleshootercat' => '',
	'tscattitle' => 'Título da Categoria',
	'desc_tscattitle' => '',
	'tscatviews' => 'Visualizações',
	'desc_tscatviews' => 'Quantidade de visualizações que a categoria teve. Estes são incrementados automaticamente sempre que um usuário clica em uma categoria.',
	'tscatdisporder' => 'Ordem de Exibição',
	'desc_tscatdisporder' => 'As categorias são ordenadas de acordo com o número da sua ordem de apresentação, do menor para o maior.',
	'tscatlist' => 'Lista de Categorias',
	'tscatdesc' => 'Descrição',
	'desc_tscatdesc' => 'Uma descrição da categoria é exibida abaixo do título. A descrição é limitada a 255 caracteres de comprimento.',
	'steps' => 'Passos',

	// Insert Category
	'insertcategory' => 'Inserir Categoria',
	'tscatdetails' => 'Detalhes da Categoria',
	'templategroups' => 'Grupo de Modelo',
	'desc_templategroups' => 'Selecione os grupos de modelo, que serão exibido nesta categoria de solução de problemas no centro de suporte.',
	'inserttscat' => 'Inserir Categoria',
	'updatetscat' => 'Atualizar Categoria',
	'selectonetgroup' => 'ERRO: Você precisa selecionar pelo menos um Grupo de Modelo',
	'troubleshootercatinsertconfirm' => 'Criada categoria de solução de problemas (%s)',
	'tcatdeleteconfirm' => 'Categoria de solução de problemas removida com sucesso',
	'tcatsdeleteconfirm' => 'Categorias de solucionador de problemas apagadas com sucesso',
	'tcatdelconfirm' => 'Tem certeza que deseja apagar esta categoria? \nDeletando uma categoria também apagará todas as etapas de solução de problemas dentro dela.',
	'invalidtroubleshootercategory' => 'Categoria de resolução de problemas inválida',

	// Edit Category
	'editcategory' => 'Editar Categoria',
	'troubleshootercatupdateconfirm' => 'Categoria de resolução de problemas atualizada (%s)',
	
	// Manage Steps
	'troubleshootersteps' => 'Etapas de Solução de Problemas',
	'managesteps' => 'Gerenciar Etapas',
	'addstep' => 'Adicionar passo',
	'addcategory' => 'Adicionar Categoria',
	'troubleshooters' => 'Resoluções de problemas',
	'filter' => 'Filtro',
	'stepdelconfirmmsg' => 'Tem certeza que deseja excluir esta etapa? Excluir um passo irá resultar na exclusão de todas as etapas filhas sob ele.',
	'tsdelconfirm' => 'Passos de solucionador de problemas excluídos',
	'stepdeleteconfirm' => 'Eliminado %s etapas de solução de problemas',
	'filtertgroupid' => 'Grupo de Modelo',
	'desc_filtertgroupid' => 'Filtrar por grupo de modelo. Só as categorias de solução de problemas sob o grupo modelo selecionado serão mostradas.',
	'listview' => 'Visualização da Lista',
	'tssteplist' => 'Listar Etapa de Solução de Problema',
	'treeview' => 'Visualização em Árvore',

	// Insert Step
	'insertstep' => 'Inserir Passo',
	'stepdetails' => 'Detalhes de etapa de solução de problemas',
	'tssubject' => 'Assunto',
	'tsdisporder' => 'Ordem de Exibição',
	'desc_tsdisporder' => 'Etapas de solução de problemas são classificadas de acordo com seu número de ordem de exibição, menor para o maior.',
	'updatestep' => 'Atualizar Passo',
	'tslinks' => 'Passos Pai',
	'selectonelink' => 'ERRO: Por favor, selecione pelo menos um passo pai',
	'tsaddconfirm' => 'Criado passo de resolução de problemas (%s)',
	'editstep' => 'Editar Passo',

	// Edit Step
	'invalidtroubleshooter' => 'Resolução de problemas inválida',
	'tsupdateconfirm' => 'Passo de resolução de problemas atualizado (%s)',
	'updatestep' => 'Atualizar passo',
	'editstep' => 'Editar passo',

	// Comments
	'comments' => 'Comentários',
	'legend' => 'Legenda: ',

	// Reports
	'views' => 'Vistas',
	'steptitle' => 'Título do passo',
	
	// Potentialy unused phrases in troubleshooter.php
	'desc_tslinks' => 'Select the Parent Steps for this Step. The Troubleshooter works in a tree-based navigational manner and revolves around parent-child relationships. You can select multiple Parent Steps by pressing the CTRL Key and clicking on the Step title.',
	'importexport' => 'Import/Export',
	'export' => 'Export',
	'exportxml' => 'Export XML',
	'exportcat' => 'Troubleshooter Categories',
	'desc_exportcat' => 'Select the Troubleshooter Categories to Export. Only the Steps under the Selected Categories will be exported.',
	'importtroubleshooter' => 'Import Troubleshooter',
	'troubleshooterfile' => 'Import File',
	'desc_troubleshooterfile' => 'Please select the XML file to import',
	'importxml' => 'Import XML',
	'importconfirm' => 'Imported data from XML file',
	'popularcategories' => 'Pouplar Categories',
	'popularsteps' => 'Popular Steps',
);
?>