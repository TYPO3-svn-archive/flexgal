<?php
if (!defined ('TYPO3_MODE')) 	die ('Access denied.');

$TCA['tx_flexgal_domain_model_image'] = array(
	'ctrl' => $TCA['tx_flexgal_domain_model_image']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'file,title,description'
	),
	'types' => array(
		'1' => array('showitem' => 'file,title,description')
	),
	'palettes' => array(
		'1' => array('showitem' => '')
	),
	'columns' => array(
		'sys_language_uid' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.php:LGL.language',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'sys_language',
				'foreign_table_where' => 'ORDER BY sys_language.title',
				'items' => array(
					array('LLL:EXT:lang/locallang_general.php:LGL.allLanguages',-1),
					array('LLL:EXT:lang/locallang_general.php:LGL.default_value',0)
				)
			)
		),
		'l18n_parent' => array(
			'displayCond' => 'FIELD:sys_language_uid:>:0',
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.php:LGL.l18n_parent',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('', 0),
				),
				'foreign_table' => 'tx_flexgal_domain_model_image',
				'foreign_table_where' => 'AND tx_flexgal_domain_model_image.uid=###REC_FIELD_l18n_parent### AND tx_flexgal_domain_model_image.sys_language_uid IN (-1,0)',
			)
		),
		'l18n_diffsource' => array(
			'config'=>array(
				'type'=>'passthrough')
		),
		't3ver_label' => array(
			'displayCond' => 'FIELD:t3ver_label:REQ:true',
			'label' => 'LLL:EXT:lang/locallang_general.php:LGL.versionLabel',
			'config' => array(
				'type'=>'none',
				'cols' => 27
			)
		),
		'hidden' => array(
			'exclude' => 1,
			'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
			'config'  => array(
				'type' => 'check'
			)
		),
		'file' => array(
			'exclude' => 0,
			'label'   => 'LLL:EXT:flexgal/Resources/Private/Language/locallang_db.xml:tx_flexgal_domain_model_image.file',
			'config'  => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			)
		),
		'title' => array(
			'exclude' => 0,
			'label'   => 'LLL:EXT:flexgal/Resources/Private/Language/locallang_db.xml:tx_flexgal_domain_model_image.title',
			'config'  => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			)
		),
		'description' => array(
			'exclude' => 0,
			'label'   => 'LLL:EXT:flexgal/Resources/Private/Language/locallang_db.xml:tx_flexgal_domain_model_image.description',
			'config'  => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required'
			)
		),
	),
);
?>