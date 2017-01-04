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
	'autoclose' => 'Fechamento automático',
	'manage' => 'Gerenciar',
	'targetstatus' => 'Alterar estado para',
	'tabgeneral' => 'Geral',

	'insertrule' => 'Inserir regra',
	'editrule' => 'Editar regra',

	'ruletitle' => 'Título da regra',
	'desc_ruletitle' => 'Insira um título para esta regra de fechamento automático.',
	'targetticketstatus' => 'Alterar estado para',
	'desc_targetticketstatus' => 'Decorrido o tempo de inatividade (consulte abaixo), os pedidos de suporte correspondentes a esta regra serão definidos com este estado (este deve ser um estado <strong>resolvido</strong>).',
	'inactivitythreshold' => 'Limite de inatividade',
	'desc_inactivitythreshold' => 'Se não for efetuada qualquer atualização a um pedido de suporte neste número de horas, o pedido de suporte será considerado como inativo. Este é o primeiro passo para o fechamento automático de um pedido de suporte.',
	'closurethreshold' => 'Limite de fechamento',
	'desc_closurethreshold' => 'Se um pedido de suporte tiver sido marcado como inativo e não tiver sido recebida qualquer atualização neste número de horas, o pedido de suporte será automaticamente definido com o estado especificado acima.',
	'isenabled' => 'Regra ativada',
	'desc_isenabled' => 'Alterne se esta regra está ativada ou não.',
	'sortorder' => 'Ordem de execução',
	'desc_sortorder' => 'É possível criar várias regras de fechamento automático. A ordem de execução determina que regras são executadas primeiro, da menor para a maior.',
	'sendpendingnotification' => 'Send inactivity notification email',
	'desc_sendpendingnotification' => 'O suporte técnico pode notificar o usuário que seu pedido de suporte foi marcado como inativo e, caso não seja recebida qualquer resposta, será fechado.',
	'sendfinalnotification' => 'Enviar e-mail de notificação final de pedido de suporte fechado',
	'desc_sendfinalnotification' => 'O suporte técnico também pode notificar o usuário que seu pedido de suporte foi fechado.',
	'suppresssurveyemail' => 'Suprimir e-mail de pesquisa de cliente',
	'desc_suppresssurveyemail' => 'Se você tiver habilitado os convites de pesquisa de satisfação de cliente quando um pedido de suporte for definido com o estado especificado acima, você pode querer prevenir que o suporte técnico envie um convite de pesquisa para pedidos de suporte automaticamente fechados.',

	'insertcriteria' => 'Inserir critérios',


	'titleautocloseruledel' => 'Regras de fechamento automático excluídas (%d)',
	'msgautocloseruledel' => 'As seguintes regras de fechamento automático foram excluídas:',
	'titleautocloseruleenable' => 'Regras de fechamento automático ativadas (%d)',
	'msgautocloseruleenable' => 'As seguintes regras de fechamento automático foram ativadas:',
	'titleautocloseruledisable' => 'Regras de fechamento automático desativadas (%d)',
	'msgautocloseruledisable' => 'As seguintes regras de fechamento automático foram desativadas:',
	'titleautocloseruleinsert' => 'Regra de fechamento automático criada',
	'msgautocloseruleinsert' => 'A regra de fechamento automático (%s) foi criada com sucesso.',
	'titleautocloseruleupdate' => 'Regra de fechamento automático atualizada',
	'msgautocloseruleupdate' => 'A regra de fechamento automático (%s) foi atualizada com sucesso.',

	'titlenocriteriaadded' => 'Nenhum critério especificado',
	'msgnocriteriaadded' => 'Você precisa especificar pelo menos um critério para criar uma regra de fechamento automático (caso contrário, o suporte técnico não saberá quais pedidos de suporte para fechar automaticamente).',

	/**
	 * ---------------------------------------------
	 * Rule Criterias
	 * ---------------------------------------------
	 */
	'notapplicable' => '-- ND --',
	'articketstatusid' => 'Estado',
	'desc_articketstatusid' => '',
	'arpriorityid' => 'Prioridade',
	'desc_arpriorityid' => '',
	'ardepartmentid' => 'Departamento',
	'desc_ardepartmentid' => '',
	'arownerstaffid' => 'Proprietário',
	'desc_arownerstaffid' => '',
	'aremailqueueid' => 'Fila de e-mail',
	'arusergroupid' => 'Grupo de usuários',
	'desc_arusergroupid' => '',
	'desc_aremailqueueid' => '',
	'arflagtype' => 'Marcação',
	'desc_arflagtype' => '',
	'arbayescategoryid' => 'Categoria Bayesiana',
	'desc_arbayescategoryid' => 'Pedidos de suporte que foram associados a uma categoria Bayesiana específica.',
	'arcreator' => 'Criador',
	'desc_arcreator' => '',
	'creatorstaff' => 'Equipe',
	'creatorclient' => 'Usuário',
	'arunassigned' => '-- Não atribuído --',
	'artemplategroupid' => 'Grupo de modelos',
	'desc_artemplategroupid' => '',
	'artickettypeid' => 'Tipo',
	'desc_rtickettypeid' => '',
);