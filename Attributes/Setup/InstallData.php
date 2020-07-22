<?php
namespace Andromeda\Attributes\Setup;

use Magento\Eav\Setup\EavSetup;
use Magento\Eav\Setup\EavSetupFactory;
use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Catalog\Setup\CategorySetupFactory;
use Magento\Eav\Model\Entity\Attribute\SetFactory as AttributeSetFactory;

class InstallData implements InstallDataInterface
{
	private $eavSetupFactory;
	private $attributeSetFactory;
	private $attributeSet;
	private $categorySetupFactory;

	public function __construct(EavSetupFactory $eavSetupFactory,
								AttributeSetFactory $attributeSetFactory,
								CategorySetupFactory $categorySetupFactory)
	{
		$this->eavSetupFactory = $eavSetupFactory;
		$this->attributeSetFactory = $attributeSetFactory;
		$this->categorySetupFactory = $categorySetupFactory;
	}
	
	public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
	{
		$setup->startSetup();

		// *******************
		// ** Attribute Set **
		// *******************

		// $categorySetup = $this->categorySetupFactory->create(['setup' => $setup]);

		// $attributeSet = $this->attributeSetFactory->create();
		// $entityTypeId = $categorySetup->getEntityTypeId(\Magento\Catalog\Model\Product::ENTITY);
		// $attributeSetId = $categorySetup->getDefaultAttributeSetId($entityTypeId);
		// $data = [
		// 	'attribute_set_name' => 'PC Completa',
		// 	'entity_type_id' => $entityTypeId,
		// 	'sort_order' => 200,
		// ];
		// $attributeSet->setData($data);
		// $attributeSet->validate();
		// $attributeSet->save();
		// $attributeSet->initFromSkeleton($attributeSetId);
		// $attributeSet->save();

		// ***********************
		// ** Product Attribute **
		// ***********************

		// $eavSetup = $this->eavSetupFactory->create(['setup' => $setup]);
		// $eavSetup->addAttribute(
		// 	\Magento\Catalog\Model\Product::ENTITY,
		// 	'sample_attribute',
		// 	[
		// 		'type' => 'text',
		// 		'backend' => '',
		// 		'frontend' => '',
		// 		'label' => 'Andromeda Attribute',
		// 		'input' => 'text',
		// 		'class' => '',
		// 		'source' => '',
		// 		'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_GLOBAL,
		// 		'visible' => true,
		// 		'required' => false,
		// 		'user_defined' => false,
		// 		'default' => '',
		// 		'searchable' => false,
		// 		'filterable' => false,
		// 		'comparable' => false,
		// 		'visible_on_front' => false,
		// 		'used_in_product_listing' => true,
		// 		'unique' => false,
		// 		'apply_to' => ''
		// 	]
		// );

		$eavSetup = $this->eavSetupFactory->create(['setup' => $setup]);
		$eavSetup->addAttribute(
			\Magento\Catalog\Model\Product::ENTITY,
			'os_type',
			[
				'type' => 'text',
				'backend' => '',
				'label' => 'Sistema Operativo',
				'input' => 'select',
				'class' => '',
				'source' => \Andromeda\Attributes\Model\Config\SistemaOperativo\SOOptions::class,
				'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_GLOBAL,
				'visible' => true,
				'required' => true,
				'user_defined' => false,
				'default' => '',
				'searchable' => false,
				'filterable' => false,
				'comparable' => false,
				'visible_on_front' => true,
				'used_in_product_listing' => true,
				'unique' => false,
				'apply_to' => ''
			]
		);

		// **************
		// ** Pantalla **
		// **************

		$eavSetup = $this->eavSetupFactory->create(['setup' => $setup]);
		$eavSetup->addAttribute(
			\Magento\Catalog\Model\Product::ENTITY,
			'tamano_pantalla',
			[
				'type' => 'number',
				'backend' => '',
				'label' => 'Pantalla: Tamaño en pulgadas',
				'input' => 'select',
				'class' => '',
				'source' => \Andromeda\Attributes\Model\Config\Pantalla\TPOptions::class,
				'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_GLOBAL,
				'visible' => true,
				'required' => true,
				'user_defined' => false,
				'default' => '',
				'searchable' => false,
				'filterable' => false,
				'comparable' => false,
				'visible_on_front' => true,
				'used_in_product_listing' => true,
				'unique' => false,
				'apply_to' => ''
			]
		);

		$eavSetup = $this->eavSetupFactory->create(['setup' => $setup]);
		$eavSetup->addAttribute(
			\Magento\Catalog\Model\Product::ENTITY,
			'resolucion_pantalla',
			[
				'type' => 'text',
				'backend' => '',
				'label' => 'Pantalla: Resolución',
				'input' => 'select',
				'class' => '',
				'source' => \Andromeda\Attributes\Model\Config\Pantalla\ROptions::class,
				'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_GLOBAL,
				'visible' => true,
				'required' => true,
				'user_defined' => false,
				'default' => '',
				'searchable' => false,
				'filterable' => false,
				'comparable' => false,
				'visible_on_front' => true,
				'used_in_product_listing' => true,
				'unique' => false,
				'apply_to' => ''
			]
		);

		$eavSetup = $this->eavSetupFactory->create(['setup' => $setup]);
		$eavSetup->addAttribute(
			\Magento\Catalog\Model\Product::ENTITY,
			'touch_pantalla',
			[
				'type' => 'text',
				'backend' => '',
				'label' => 'Pantalla: Touch Screen',
				'input' => 'select',
				'class' => '',
				'source' => \Andromeda\Attributes\Model\Config\BOptions::class,
				'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_GLOBAL,
				'visible' => true,
				'required' => false,
				'user_defined' => false,
				'default' => '',
				'searchable' => false,
				'filterable' => false,
				'comparable' => false,
				'visible_on_front' => true,
				'used_in_product_listing' => true,
				'unique' => false,
				'apply_to' => ''
			]
		);

		$eavSetup = $this->eavSetupFactory->create(['setup' => $setup]);
		$eavSetup->addAttribute(
			\Magento\Catalog\Model\Product::ENTITY,
			'panel_pantalla',
			[
				'type' => 'text',
				'backend' => '',
				'label' => 'Pantalla: Panel',
				'input' => 'select',
				'class' => '',
				'source' => \Andromeda\Attributes\Model\Config\Pantalla\PanelOptions::class,
				'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_GLOBAL,
				'visible' => true,
				'required' => false,
				'user_defined' => false,
				'default' => '',
				'searchable' => false,
				'filterable' => false,
				'comparable' => false,
				'visible_on_front' => true,
				'used_in_product_listing' => true,
				'unique' => false,
				'apply_to' => ''
			]
		);

		$eavSetup = $this->eavSetupFactory->create(['setup' => $setup]);
		$eavSetup->addAttribute(
			\Magento\Catalog\Model\Product::ENTITY,
			'brillo_pantalla',
			[
				'type' => 'text',
				'backend' => '',
				'label' => 'Pantalla: Brillo',
				'input' => 'select',
				'class' => '',
				'source' => \Andromeda\Attributes\Model\Config\Pantalla\BrilloOptions::class,
				'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_GLOBAL,
				'visible' => true,
				'required' => false,
				'user_defined' => false,
				'default' => '',
				'searchable' => false,
				'filterable' => false,
				'comparable' => false,
				'visible_on_front' => true,
				'used_in_product_listing' => true,
				'unique' => false,
				'apply_to' => ''
			]
		);

		$eavSetup = $this->eavSetupFactory->create(['setup' => $setup]);
		$eavSetup->addAttribute(
			\Magento\Catalog\Model\Product::ENTITY,
			'relacion_aspecto_pantalla',
			[
				'type' => 'text',
				'backend' => '',
				'label' => 'Pantalla: Relación de Aspecto',
				'input' => 'select',
				'class' => '',
				'source' => \Andromeda\Attributes\Model\Config\Pantalla\RelacionAspectoOptions::class,
				'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_GLOBAL,
				'visible' => true,
				'required' => false,
				'user_defined' => false,
				'default' => '',
				'searchable' => false,
				'filterable' => false,
				'comparable' => false,
				'visible_on_front' => true,
				'used_in_product_listing' => true,
				'unique' => false,
				'apply_to' => ''
			]
		);

		$eavSetup = $this->eavSetupFactory->create(['setup' => $setup]);
		$eavSetup->addAttribute(
			\Magento\Catalog\Model\Product::ENTITY,
			'contraste_pantalla',
			[
				'type' => 'text',
				'backend' => '',
				'label' => 'Pantalla: Contraste',
				'input' => 'select',
				'class' => '',
				'source' => \Andromeda\Attributes\Model\Config\Pantalla\ContrasteOptions::class,
				'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_GLOBAL,
				'visible' => true,
				'required' => false,
				'user_defined' => false,
				'default' => '',
				'searchable' => false,
				'filterable' => false,
				'comparable' => false,
				'visible_on_front' => true,
				'used_in_product_listing' => true,
				'unique' => false,
				'apply_to' => ''
			]
		);

		$eavSetup = $this->eavSetupFactory->create(['setup' => $setup]);
		$eavSetup->addAttribute(
			\Magento\Catalog\Model\Product::ENTITY,
			'tiempo_respuesta_pantalla',
			[
				'type' => 'text',
				'backend' => '',
				'label' => 'Pantalla: Tiempo de Respuesta',
				'input' => 'select',
				'class' => '',
				'source' => \Andromeda\Attributes\Model\Config\Pantalla\TiempoRespuestaOptions::class,
				'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_GLOBAL,
				'visible' => true,
				'required' => false,
				'user_defined' => false,
				'default' => '',
				'searchable' => false,
				'filterable' => false,
				'comparable' => false,
				'visible_on_front' => true,
				'used_in_product_listing' => true,
				'unique' => false,
				'apply_to' => ''
			]
		);

		$eavSetup = $this->eavSetupFactory->create(['setup' => $setup]);
		$eavSetup->addAttribute(
			\Magento\Catalog\Model\Product::ENTITY,
			'angulo_de_vision_pantalla',
			[
				'type' => 'text',
				'backend' => '',
				'label' => 'Pantalla: Angulo de Visión',
				'input' => 'select',
				'class' => '',
				'source' => \Andromeda\Attributes\Model\Config\Pantalla\AnguloVisionOptions::class,
				'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_GLOBAL,
				'visible' => true,
				'required' => false,
				'user_defined' => false,
				'default' => '',
				'searchable' => false,
				'filterable' => false,
				'comparable' => false,
				'visible_on_front' => true,
				'used_in_product_listing' => true,
				'unique' => false,
				'apply_to' => ''
			]
		);

		// ****************
		// ** Procesador **
		// ****************

		$eavSetup = $this->eavSetupFactory->create(['setup' => $setup]);
		$eavSetup->addAttribute(
			\Magento\Catalog\Model\Product::ENTITY,
			'familia_procesador',
			[
				'type' => 'text',
				'backend' => '',
				'label' => 'Procesador: Familia del Procesador',
				'input' => 'select',
				'class' => '',
				'source' => \Andromeda\Attributes\Model\Config\Procesador\FamiliaOptions::class,
				'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_GLOBAL,
				'visible' => true,
				'required' => false,
				'user_defined' => false,
				'default' => '',
				'searchable' => false,
				'filterable' => false,
				'comparable' => false,
				'visible_on_front' => true,
				'used_in_product_listing' => true,
				'unique' => false,
				'apply_to' => ''
			]
		);

		$eavSetup = $this->eavSetupFactory->create(['setup' => $setup]);
		$eavSetup->addAttribute(
			\Magento\Catalog\Model\Product::ENTITY,
			'modelo_procesador',
			[
				'type' => 'text',
				'backend' => '',
				'label' => 'Procesador: Modelo',
				'input' => 'select',
				'class' => '',
				'source' => \Andromeda\Attributes\Model\Config\Procesador\ModelOptions::class,
				'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_GLOBAL,
				'visible' => true,
				'required' => true,
				'user_defined' => false,
				'default' => '',
				'searchable' => false,
				'filterable' => false,
				'comparable' => false,
				'visible_on_front' => true,
				'used_in_product_listing' => true,
				'unique' => false,
				'apply_to' => ''
			]
		);

		$eavSetup = $this->eavSetupFactory->create(['setup' => $setup]);
		$eavSetup->addAttribute(
			\Magento\Catalog\Model\Product::ENTITY,
			'generacion_procesador',
			[
				'type' => 'text',
				'backend' => '',
				'label' => 'Procesador: Generación',
				'input' => 'select',
				'class' => '',
				'source' => \Andromeda\Attributes\Model\Config\Procesador\GenerationOptions::class,
				'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_GLOBAL,
				'visible' => true,
				'required' => false,
				'user_defined' => false,
				'default' => '',
				'searchable' => false,
				'filterable' => false,
				'comparable' => false,
				'visible_on_front' => true,
				'used_in_product_listing' => true,
				'unique' => false,
				'apply_to' => ''
			]
		);

		// *****************
		// ** Memoria RAM **
		// *****************

		$eavSetup = $this->eavSetupFactory->create(['setup' => $setup]);
		$eavSetup->addAttribute(
			\Magento\Catalog\Model\Product::ENTITY,
			'memoria_ram',
			[
				'type' => 'text',
				'backend' => '',
				'label' => 'RAM: Memoria RAM',
				'input' => 'select',
				'class' => '',
				'source' => \Andromeda\Attributes\Model\Config\Ram\RamOptions::class,
				'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_GLOBAL,
				'visible' => true,
				'required' => true,
				'user_defined' => false,
				'default' => '',
				'searchable' => false,
				'filterable' => false,
				'comparable' => false,
				'visible_on_front' => true,
				'used_in_product_listing' => true,
				'unique' => false,
				'apply_to' => ''
			]
		);

		$eavSetup = $this->eavSetupFactory->create(['setup' => $setup]);
		$eavSetup->addAttribute(
			\Magento\Catalog\Model\Product::ENTITY,
			'tecnologia_ram',
			[
				'type' => 'text',
				'backend' => '',
				'label' => 'RAM: Tecnología',
				'input' => 'select',
				'class' => '',
				'source' => \Andromeda\Attributes\Model\Config\Ram\TechOptions::class,
				'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_GLOBAL,
				'visible' => true,
				'required' => false,
				'user_defined' => false,
				'default' => '',
				'searchable' => false,
				'filterable' => false,
				'comparable' => false,
				'visible_on_front' => true,
				'used_in_product_listing' => true,
				'unique' => false,
				'apply_to' => ''
			]
		);
		
		$eavSetup = $this->eavSetupFactory->create(['setup' => $setup]);
		$eavSetup->addAttribute(
			\Magento\Catalog\Model\Product::ENTITY,
			'expandible_ram',
			[
				'type' => 'text',
				'backend' => '',
				'label' => 'RAM: Expandible',
				'input' => 'select',
				'class' => '',
				'source' => \Andromeda\Attributes\Model\Config\Ram\ExpansionOptions::class,
				'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_GLOBAL,
				'visible' => true,
				'required' => false,
				'user_defined' => false,
				'default' => '',
				'searchable' => false,
				'filterable' => false,
				'comparable' => false,
				'visible_on_front' => true,
				'used_in_product_listing' => true,
				'unique' => false,
				'apply_to' => ''
			]
		);

		$eavSetup = $this->eavSetupFactory->create(['setup' => $setup]);
		$eavSetup->addAttribute(
			\Magento\Catalog\Model\Product::ENTITY,
			'slots_ram',
			[
				'type' => 'text',
				'backend' => '',
				'label' => 'RAM: Cantidad de Slots',
				'input' => 'select',
				'class' => '',
				'source' => \Andromeda\Attributes\Model\Config\Ram\SlotOptions::class,
				'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_GLOBAL,
				'visible' => true,
				'required' => false,
				'user_defined' => false,
				'default' => '',
				'searchable' => false,
				'filterable' => false,
				'comparable' => false,
				'visible_on_front' => true,
				'used_in_product_listing' => true,
				'unique' => false,
				'apply_to' => ''
			]
		);

		// ********************
		// ** Almacenamiento **
		// ********************

		$eavSetup = $this->eavSetupFactory->create(['setup' => $setup]);
		$eavSetup->addAttribute(
			\Magento\Catalog\Model\Product::ENTITY,
			'almacenamiento',
			[
				'type' => 'text',
				'backend' => '',
				'label' => 'Almacenamiento',
				'input' => 'select',
				'class' => '',
				'source' => \Andromeda\Attributes\Model\Config\Almacenamiento\StorageOptions::class,
				'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_GLOBAL,
				'visible' => true,
				'required' => true,
				'user_defined' => false,
				'default' => '',
				'searchable' => false,
				'filterable' => false,
				'comparable' => false,
				'visible_on_front' => true,
				'used_in_product_listing' => true,
				'unique' => false,
				'apply_to' => ''
			]
		);


		$eavSetup = $this->eavSetupFactory->create(['setup' => $setup]);
		$eavSetup->addAttribute(
			\Magento\Catalog\Model\Product::ENTITY,
			'tecnologia_almacenamiento',
			[
				'type' => 'text',
				'backend' => '',
				'label' => 'Almacenamiento: Tecnología',
				'input' => 'select',
				'class' => '',
				'source' => \Andromeda\Attributes\Model\Config\Almacenamiento\TechOptions::class,
				'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_GLOBAL,
				'visible' => true,
				'required' => false,
				'user_defined' => false,
				'default' => '',
				'searchable' => false,
				'filterable' => false,
				'comparable' => false,
				'visible_on_front' => true,
				'used_in_product_listing' => true,
				'unique' => false,
				'apply_to' => ''
			]
		);

		// **************
		// ** Gráficos **
		// **************

		$eavSetup = $this->eavSetupFactory->create(['setup' => $setup]);
		$eavSetup->addAttribute(
			\Magento\Catalog\Model\Product::ENTITY,
			'graficos_del_procesador',
			[
				'type' => 'text',
				'backend' => '',
				'label' => 'Gráficos: Gráficos del procesador',
				'input' => 'select',
				'class' => '',
				'source' => \Andromeda\Attributes\Model\Config\Graficos\ProcessorGraphicsOptions::class,
				'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_GLOBAL,
				'visible' => true,
				'required' => false,
				'user_defined' => false,
				'default' => '',
				'searchable' => false,
				'filterable' => false,
				'comparable' => false,
				'visible_on_front' => true,
				'used_in_product_listing' => true,
				'unique' => false,
				'apply_to' => ''
			]
		);

		$eavSetup = $this->eavSetupFactory->create(['setup' => $setup]);
		$eavSetup->addAttribute(
			\Magento\Catalog\Model\Product::ENTITY,
			'placa_dedicada',
			[
				'type' => 'text',
				'backend' => '',
				'label' => 'Gráficos: Placa de video dedicada',
				'input' => 'select',
				'class' => '',
				'source' => \Andromeda\Attributes\Model\Config\BOptions::class,
				'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_GLOBAL,
				'visible' => true,
				'required' => false,
				'user_defined' => false,
				'default' => '',
				'searchable' => false,
				'filterable' => false,
				'comparable' => false,
				'visible_on_front' => true,
				'used_in_product_listing' => true,
				'unique' => false,
				'apply_to' => ''
			]
		);

		// ****************************
		// ** Conectividad y Puertos **
		// ****************************

		$eavSetup = $this->eavSetupFactory->create(['setup' => $setup]);
		$eavSetup->addAttribute(
			\Magento\Catalog\Model\Product::ENTITY,
			'placa_red_ethernet',
			[
				'type' => 'text',
				'backend' => '',
				'label' => 'Conectividad y Puertos: Placa de red Ethernet',
				'input' => 'select',
				'class' => '',
				'source' => \Andromeda\Attributes\Model\Config\Conectividad\EthernetOptions::class,
				'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_GLOBAL,
				'visible' => true,
				'required' => true,
				'user_defined' => false,
				'default' => '',
				'searchable' => false,
				'filterable' => false,
				'comparable' => false,
				'visible_on_front' => true,
				'used_in_product_listing' => true,
				'unique' => false,
				'apply_to' => ''
			]
		);

		$eavSetup = $this->eavSetupFactory->create(['setup' => $setup]);
		$eavSetup->addAttribute(
			\Magento\Catalog\Model\Product::ENTITY,
			'placa_red_wifi',
			[
				'type' => 'text',
				'backend' => '',
				'label' => 'Conectividad y Puertos: Placa de red Wi-Fi',
				'input' => 'select',
				'class' => '',
				'source' => \Andromeda\Attributes\Model\Config\Conectividad\WifiOptions::class,
				'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_GLOBAL,
				'visible' => true,
				'required' => true,
				'user_defined' => false,
				'default' => '',
				'searchable' => false,
				'filterable' => false,
				'comparable' => false,
				'visible_on_front' => true,
				'used_in_product_listing' => true,
				'unique' => false,
				'apply_to' => ''
			]
		);

		$eavSetup = $this->eavSetupFactory->create(['setup' => $setup]);
		$eavSetup->addAttribute(
			\Magento\Catalog\Model\Product::ENTITY,
			'bluetooth',
			[
				'type' => 'text',
				'backend' => '',
				'label' => 'Conectividad y Puertos: Bluetooth',
				'input' => 'select',
				'class' => '',
				'source' => \Andromeda\Attributes\Model\Config\Conectividad\BluetoothOptions::class,
				'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_GLOBAL,
				'visible' => true,
				'required' => true,
				'user_defined' => false,
				'default' => '',
				'searchable' => false,
				'filterable' => false,
				'comparable' => false,
				'visible_on_front' => true,
				'used_in_product_listing' => true,
				'unique' => false,
				'apply_to' => ''
			]
		);

		$eavSetup = $this->eavSetupFactory->create(['setup' => $setup]);
		$eavSetup->addAttribute(
			\Magento\Catalog\Model\Product::ENTITY,
			'usb',
			[
				'type' => 'text',
				'backend' => '',
				'label' => 'Conectividad y Puertos: USB',
				'input' => 'select',
				'class' => '',
				'source' => \Andromeda\Attributes\Model\Config\Conectividad\UsbOptions::class,
				'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_GLOBAL,
				'visible' => true,
				'required' => true,
				'user_defined' => false,
				'default' => '',
				'searchable' => false,
				'filterable' => false,
				'comparable' => false,
				'visible_on_front' => true,
				'used_in_product_listing' => true,
				'unique' => false,
				'apply_to' => ''
			]
		);

		$eavSetup = $this->eavSetupFactory->create(['setup' => $setup]);
		$eavSetup->addAttribute(
			\Magento\Catalog\Model\Product::ENTITY,
			'front_usb',
			[
				'type' => 'text',
				'backend' => '',
				'label' => 'Conectividad y Puertos: USB Frontales',
				'input' => 'select',
				'class' => '',
				'source' => \Andromeda\Attributes\Model\Config\Conectividad\FrontUsbOptions::class,
				'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_GLOBAL,
				'visible' => true,
				'required' => false,
				'user_defined' => false,
				'default' => '',
				'searchable' => false,
				'filterable' => false,
				'comparable' => false,
				'visible_on_front' => true,
				'used_in_product_listing' => true,
				'unique' => false,
				'apply_to' => ''
			]
		);

		$eavSetup = $this->eavSetupFactory->create(['setup' => $setup]);
		$eavSetup->addAttribute(
			\Magento\Catalog\Model\Product::ENTITY,
			'back_usb',
			[
				'type' => 'text',
				'backend' => '',
				'label' => 'Conectividad y Puertos: USB Traseros',
				'input' => 'select',
				'class' => '',
				'source' => \Andromeda\Attributes\Model\Config\Conectividad\BackUsbOptions::class,
				'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_GLOBAL,
				'visible' => true,
				'required' => false,
				'user_defined' => false,
				'default' => '',
				'searchable' => false,
				'filterable' => false,
				'comparable' => false,
				'visible_on_front' => true,
				'used_in_product_listing' => true,
				'unique' => false,
				'apply_to' => ''
			]
		);

		$eavSetup = $this->eavSetupFactory->create(['setup' => $setup]);
		$eavSetup->addAttribute(
			\Magento\Catalog\Model\Product::ENTITY,
			'salida_de_video',
			[
				'type' => 'text',
				'backend' => '',
				'label' => 'Conectividad y Puertos: Salida de video',
				'input' => 'select',
				'class' => '',
				'source' => \Andromeda\Attributes\Model\Config\Conectividad\VideoOutputOptions::class,
				'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_GLOBAL,
				'visible' => true,
				'required' => false,
				'user_defined' => false,
				'default' => '',
				'searchable' => false,
				'filterable' => false,
				'comparable' => false,
				'visible_on_front' => true,
				'used_in_product_listing' => true,
				'unique' => false,
				'apply_to' => ''
			]
		);

		// **************************
		// ** Seguridad y sensores **
		// **************************

		$eavSetup = $this->eavSetupFactory->create(['setup' => $setup]);
		$eavSetup->addAttribute(
			\Magento\Catalog\Model\Product::ENTITY,
			'vesa_seguridad_y_sensores',
			[
				'type' => 'text',
				'backend' => '',
				'label' => 'Seguridad y sensores: Vesa',
				'input' => 'select',
				'class' => '',
				'source' => \Andromeda\Attributes\Model\Config\BOptions::class,
				'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_GLOBAL,
				'visible' => true,
				'required' => false,
				'user_defined' => false,
				'default' => '',
				'searchable' => false,
				'filterable' => false,
				'comparable' => false,
				'visible_on_front' => true,
				'used_in_product_listing' => true,
				'unique' => false,
				'apply_to' => ''
			]
		);

		$eavSetup = $this->eavSetupFactory->create(['setup' => $setup]);
		$eavSetup->addAttribute(
			\Magento\Catalog\Model\Product::ENTITY,
			'kensington_seguridad_y_sensores',
			[
				'type' => 'text',
				'backend' => '',
				'label' => 'Seguridad y sensores: Kensington',
				'input' => 'select',
				'class' => '',
				'source' => \Andromeda\Attributes\Model\Config\BOptions::class,
				'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_GLOBAL,
				'visible' => true,
				'required' => false,
				'user_defined' => false,
				'default' => '',
				'searchable' => false,
				'filterable' => false,
				'comparable' => false,
				'visible_on_front' => true,
				'used_in_product_listing' => true,
				'unique' => false,
				'apply_to' => ''
			]
		);
		
		$eavSetup = $this->eavSetupFactory->create(['setup' => $setup]);
		$eavSetup->addAttribute(
			\Magento\Catalog\Model\Product::ENTITY,
			'fingerprint_seguridad_y_sensores',
			[
				'type' => 'text',
				'backend' => '',
				'label' => 'Seguridad y sensores: Fingerprint',
				'input' => 'select',
				'class' => '',
				'source' => \Andromeda\Attributes\Model\Config\BOptions::class,
				'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_GLOBAL,
				'visible' => true,
				'required' => false,
				'user_defined' => false,
				'default' => '',
				'searchable' => false,
				'filterable' => false,
				'comparable' => false,
				'visible_on_front' => true,
				'used_in_product_listing' => true,
				'unique' => false,
				'apply_to' => ''
			]
		);

		$eavSetup = $this->eavSetupFactory->create(['setup' => $setup]);
		$eavSetup->addAttribute(
			\Magento\Catalog\Model\Product::ENTITY,
			'tpm_seguridad_y_sensores',
			[
				'type' => 'text',
				'backend' => '',
				'label' => 'Seguridad y sensores: TPM',
				'input' => 'select',
				'class' => '',
				'source' => \Andromeda\Attributes\Model\Config\BOptions::class,
				'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_GLOBAL,
				'visible' => true,
				'required' => false,
				'user_defined' => false,
				'default' => '',
				'searchable' => false,
				'filterable' => false,
				'comparable' => false,
				'visible_on_front' => true,
				'used_in_product_listing' => true,
				'unique' => false,
				'apply_to' => ''
			]
		);

		$eavSetup = $this->eavSetupFactory->create(['setup' => $setup]);
		$eavSetup->addAttribute(
			\Magento\Catalog\Model\Product::ENTITY,
			'acelerometro_seguridad_y_sensores',
			[
				'type' => 'text',
				'backend' => '',
				'label' => 'Seguridad y sensores: Acelerómetro',
				'input' => 'select',
				'class' => '',
				'source' => \Andromeda\Attributes\Model\Config\BOptions::class,
				'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_GLOBAL,
				'visible' => true,
				'required' => false,
				'user_defined' => false,
				'default' => '',
				'searchable' => false,
				'filterable' => false,
				'comparable' => false,
				'visible_on_front' => true,
				'used_in_product_listing' => true,
				'unique' => false,
				'apply_to' => ''
			]
		);

		// ****************
		// ** Multimedia **
		// ****************

		$eavSetup = $this->eavSetupFactory->create(['setup' => $setup]);
		$eavSetup->addAttribute(
			\Magento\Catalog\Model\Product::ENTITY,
			'lector_de_memorias',
			[
				'type' => 'text',
				'backend' => '',
				'label' => 'Multimedia: Lector de memorias',
				'input' => 'select',
				'class' => '',
				'source' => \Andromeda\Attributes\Model\Config\Multimedia\MemoryReaderOptions::class,
				'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_GLOBAL,
				'visible' => true,
				'required' => true,
				'user_defined' => false,
				'default' => '',
				'searchable' => false,
				'filterable' => false,
				'comparable' => false,
				'visible_on_front' => true,
				'used_in_product_listing' => true,
				'unique' => false,
				'apply_to' => ''
			]
		);

		$eavSetup = $this->eavSetupFactory->create(['setup' => $setup]);
		$eavSetup->addAttribute(
			\Magento\Catalog\Model\Product::ENTITY,
			'webcam_frontal',
			[
				'type' => 'text',
				'backend' => '',
				'label' => 'Multimedia: Webcam frontal',
				'input' => 'select',
				'class' => '',
				'source' => \Andromeda\Attributes\Model\Config\Multimedia\FrontWebCamOptions::class,
				'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_GLOBAL,
				'visible' => true,
				'required' => true,
				'user_defined' => false,
				'default' => '',
				'searchable' => false,
				'filterable' => false,
				'comparable' => false,
				'visible_on_front' => true,
				'used_in_product_listing' => true,
				'unique' => false,
				'apply_to' => ''
			]
		);

		$eavSetup = $this->eavSetupFactory->create(['setup' => $setup]);
		$eavSetup->addAttribute(
			\Magento\Catalog\Model\Product::ENTITY,
			'webcam_trasera',
			[
				'type' => 'text',
				'backend' => '',
				'label' => 'Multimedia: Webcam trasera',
				'input' => 'select',
				'class' => '',
				'source' => '',
				'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_GLOBAL,
				'visible' => true,
				'required' => false,
				'user_defined' => false,
				'default' => '',
				'searchable' => false,
				'filterable' => false,
				'comparable' => false,
				'visible_on_front' => true,
				'used_in_product_listing' => true,
				'unique' => false,
				'apply_to' => ''
			]
		);

		$eavSetup = $this->eavSetupFactory->create(['setup' => $setup]);
		$eavSetup->addAttribute(
			\Magento\Catalog\Model\Product::ENTITY,
			'salida_de_audio',
			[
				'type' => 'text',
				'backend' => '',
				'label' => 'Multimedia: Salida de audio',
				'input' => 'select',
				'class' => '',
				'source' => \Andromeda\Attributes\Model\Config\Multimedia\AudioOutputOptions::class,
				'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_GLOBAL,
				'visible' => true,
				'required' => false,
				'user_defined' => false,
				'default' => '',
				'searchable' => false,
				'filterable' => false,
				'comparable' => false,
				'visible_on_front' => true,
				'used_in_product_listing' => true,
				'unique' => false,
				'apply_to' => ''
			]
		);

		$eavSetup = $this->eavSetupFactory->create(['setup' => $setup]);
		$eavSetup->addAttribute(
			\Magento\Catalog\Model\Product::ENTITY,
			'grabadora_lectora_dvd_cd',
			[
				'type' => 'text',
				'backend' => '',
				'label' => 'Multimedia: Grabadora/Lectora DVD/CD',
				'input' => 'select',
				'class' => '',
				'source' => \Andromeda\Attributes\Model\Config\Multimedia\RWDVDCDOptions::class,
				'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_GLOBAL,
				'visible' => true,
				'required' => false,
				'user_defined' => false,
				'default' => '',
				'searchable' => false,
				'filterable' => false,
				'comparable' => false,
				'visible_on_front' => true,
				'used_in_product_listing' => true,
				'unique' => false,
				'apply_to' => ''
			]
		);

		$eavSetup = $this->eavSetupFactory->create(['setup' => $setup]);
		$eavSetup->addAttribute(
			\Magento\Catalog\Model\Product::ENTITY,
			'entrada_de_microfono',
			[
				'type' => 'text',
				'backend' => '',
				'label' => 'Multimedia: Entrada de micrófono',
				'input' => 'select',
				'class' => '',
				'source' => \Andromeda\Attributes\Model\Config\Multimedia\MicrophoneInputOptions::class,
				'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_GLOBAL,
				'visible' => true,
				'required' => false,
				'user_defined' => false,
				'default' => '',
				'searchable' => false,
				'filterable' => false,
				'comparable' => false,
				'visible_on_front' => true,
				'used_in_product_listing' => true,
				'unique' => false,
				'apply_to' => ''
			]
		);

		$eavSetup = $this->eavSetupFactory->create(['setup' => $setup]);
		$eavSetup->addAttribute(
			\Magento\Catalog\Model\Product::ENTITY,
			'parlantes_incorporados',
			[
				'type' => 'text',
				'backend' => '',
				'label' => 'Multimedia: Parlantes Incorporados',
				'input' => 'select',
				'class' => '',
				'source' => \Andromeda\Attributes\Model\Config\Multimedia\BuiltInSpeakersOptions::class,
				'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_GLOBAL,
				'visible' => true,
				'required' => false,
				'user_defined' => false,
				'default' => '',
				'searchable' => false,
				'filterable' => false,
				'comparable' => false,
				'visible_on_front' => true,
				'used_in_product_listing' => true,
				'unique' => false,
				'apply_to' => ''
			]
		);

		$eavSetup = $this->eavSetupFactory->create(['setup' => $setup]);
		$eavSetup->addAttribute(
			\Magento\Catalog\Model\Product::ENTITY,
			'microfono_incorporado',
			[
				'type' => 'text',
				'backend' => '',
				'label' => 'Multimedia: Micrófono Incorporado',
				'input' => 'select',
				'class' => '',
				'source' => \Andromeda\Attributes\Model\Config\BOptions::class,
				'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_GLOBAL,
				'visible' => true,
				'required' => false,
				'user_defined' => false,
				'default' => '',
				'searchable' => false,
				'filterable' => false,
				'comparable' => false,
				'visible_on_front' => true,
				'used_in_product_listing' => true,
				'unique' => false,
				'apply_to' => ''
			]
		);

		$eavSetup = $this->eavSetupFactory->create(['setup' => $setup]);
		$eavSetup->addAttribute(
			\Magento\Catalog\Model\Product::ENTITY,
			'teclado',
			[
				'type' => 'text',
				'backend' => '',
				'label' => 'Multimedia: Teclado',
				'input' => 'select',
				'class' => '',
				'source' => \Andromeda\Attributes\Model\Config\Multimedia\KeyboardOptions::class,
				'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_GLOBAL,
				'visible' => true,
				'required' => false,
				'user_defined' => false,
				'default' => '',
				'searchable' => false,
				'filterable' => false,
				'comparable' => false,
				'visible_on_front' => true,
				'used_in_product_listing' => true,
				'unique' => false,
				'apply_to' => ''
			]
		);

		$eavSetup = $this->eavSetupFactory->create(['setup' => $setup]);
		$eavSetup->addAttribute(
			\Magento\Catalog\Model\Product::ENTITY,
			'puerto_auricular_microfono',
			[
				'type' => 'text',
				'backend' => '',
				'label' => 'Multimedia: Puerto Auricular / Micrófono',
				'input' => 'select',
				'class' => '',
				'source' => \Andromeda\Attributes\Model\Config\Multimedia\EarphoneMicrophonePortOptions::class,
				'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_GLOBAL,
				'visible' => true,
				'required' => false,
				'user_defined' => false,
				'default' => '',
				'searchable' => false,
				'filterable' => false,
				'comparable' => false,
				'visible_on_front' => true,
				'used_in_product_listing' => true,
				'unique' => false,
				'apply_to' => ''
			]
		);
				
		// *****************************
		// ** Software y aplicaciones **
		// *****************************

		$eavSetup = $this->eavSetupFactory->create(['setup' => $setup]);
		$eavSetup->addAttribute(
			\Magento\Catalog\Model\Product::ENTITY,
			'software_incluido',
			[
				'type' => 'text',
				'backend' => '',
				'label' => 'Software y aplicaciones: Software incluido',
				'input' => 'select',
				'class' => '',
				'source' => '',
				'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_GLOBAL,
				'visible' => true,
				'required' => false,
				'user_defined' => false,
				'default' => '',
				'searchable' => false,
				'filterable' => false,
				'comparable' => false,
				'visible_on_front' => true,
				'used_in_product_listing' => true,
				'unique' => false,
				'apply_to' => ''
			]
		);

		// ****************
		// ** Apariencia **
		// ****************

		$eavSetup = $this->eavSetupFactory->create(['setup' => $setup]);
		$eavSetup->addAttribute(
			\Magento\Catalog\Model\Product::ENTITY,
			'apariencia_chasis',
			[
				'type' => 'text',
				'backend' => '',
				'label' => 'Apariencia: Chásis',
				'input' => 'select',
				'class' => '',
				'source' => \Andromeda\Attributes\Model\Config\Apariencia\ChasisOptions::class,
				'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_GLOBAL,
				'visible' => true,
				'required' => false,
				'user_defined' => false,
				'default' => '',
				'searchable' => false,
				'filterable' => false,
				'comparable' => false,
				'visible_on_front' => true,
				'used_in_product_listing' => true,
				'unique' => false,
				'apply_to' => ''
			]
		);

		$eavSetup = $this->eavSetupFactory->create(['setup' => $setup]);
		$eavSetup->addAttribute(
			\Magento\Catalog\Model\Product::ENTITY,
			'apariencia_color',
			[
				'type' => 'text',
				'backend' => '',
				'label' => 'Apariencia: Color',
				'input' => 'select',
				'class' => '',
				'source' => \Andromeda\Attributes\Model\Config\Apariencia\ColorOptions::class,
				'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_GLOBAL,
				'visible' => true,
				'required' => false,
				'user_defined' => false,
				'default' => '',
				'searchable' => false,
				'filterable' => false,
				'comparable' => false,
				'visible_on_front' => true,
				'used_in_product_listing' => true,
				'unique' => false,
				'apply_to' => ''
			]
		);

		$eavSetup = $this->eavSetupFactory->create(['setup' => $setup]);
		$eavSetup->addAttribute(
			\Magento\Catalog\Model\Product::ENTITY,
			'apariencia_dimensiones',
			[
				'type' => 'text',
				'backend' => '',
				'label' => 'Apariencia: Dimensiones',
				'input' => 'select',
				'class' => '',
				'source' => \Andromeda\Attributes\Model\Config\Apariencia\DimensionOptions::class,
				'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_GLOBAL,
				'visible' => true,
				'required' => true,
				'user_defined' => false,
				'default' => '',
				'searchable' => false,
				'filterable' => false,
				'comparable' => false,
				'visible_on_front' => true,
				'used_in_product_listing' => true,
				'unique' => false,
				'apply_to' => ''
			]
		);

		$eavSetup = $this->eavSetupFactory->create(['setup' => $setup]);
		$eavSetup->addAttribute(
			\Magento\Catalog\Model\Product::ENTITY,
			'apariencia_peso',
			[
				'type' => 'text',
				'backend' => '',
				'label' => 'Apariencia: Peso',
				'input' => 'select',
				'class' => '',
				'source' => \Andromeda\Attributes\Model\Config\Apariencia\WeightOptions::class,
				'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_GLOBAL,
				'visible' => true,
				'required' => true,
				'user_defined' => false,
				'default' => '',
				'searchable' => false,
				'filterable' => false,
				'comparable' => false,
				'visible_on_front' => true,
				'used_in_product_listing' => true,
				'unique' => false,
				'apply_to' => ''
			]
		);

		// ****************************
		// ** Batería y Alimentación **
		// ****************************

		$eavSetup = $this->eavSetupFactory->create(['setup' => $setup]);
		$eavSetup->addAttribute(
			\Magento\Catalog\Model\Product::ENTITY,
			'bateria',
			[
				'type' => 'text',
				'backend' => '',
				'label' => 'Batería y Alimentación: Batería',
				'input' => 'select',
				'class' => '',
				'source' => \Andromeda\Attributes\Model\Config\Alimentacion\BatteryOptions::class,
				'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_GLOBAL,
				'visible' => true,
				'required' => false,
				'user_defined' => false,
				'default' => '',
				'searchable' => false,
				'filterable' => false,
				'comparable' => false,
				'visible_on_front' => true,
				'used_in_product_listing' => true,
				'unique' => false,
				'apply_to' => ''
			]
		);

		$eavSetup = $this->eavSetupFactory->create(['setup' => $setup]);
		$eavSetup->addAttribute(
			\Magento\Catalog\Model\Product::ENTITY,
			'fuente_externa',
			[
				'type' => 'text',
				'backend' => '',
				'label' => 'Batería y Alimentación: Fuente externa',
				'input' => 'select',
				'class' => '',
				'source' => \Andromeda\Attributes\Model\Config\Alimentacion\ExternalSourceOptions::class,
				'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_GLOBAL,
				'visible' => true,
				'required' => false,
				'user_defined' => false,
				'default' => '',
				'searchable' => false,
				'filterable' => false,
				'comparable' => false,
				'visible_on_front' => true,
				'used_in_product_listing' => true,
				'unique' => false,
				'apply_to' => ''
			]
		);

		$eavSetup = $this->eavSetupFactory->create(['setup' => $setup]);
		$eavSetup->addAttribute(
			\Magento\Catalog\Model\Product::ENTITY,
			'fuente_interna',
			[
				'type' => 'text',
				'backend' => '',
				'label' => 'Batería y Alimentación: Fuente interna',
				'input' => 'select',
				'class' => '',
				'source' => \Andromeda\Attributes\Model\Config\Alimentacion\InternalSourceOptions::class,
				'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_GLOBAL,
				'visible' => true,
				'required' => false,
				'user_defined' => false,
				'default' => '',
				'searchable' => false,
				'filterable' => false,
				'comparable' => false,
				'visible_on_front' => true,
				'used_in_product_listing' => true,
				'unique' => false,
				'apply_to' => ''
			]
		);

		// ***************
		// **  Garantía **
		// ***************

		$eavSetup = $this->eavSetupFactory->create(['setup' => $setup]);
		$eavSetup->addAttribute(
			\Magento\Catalog\Model\Product::ENTITY,
			'garantia',
			[
				'type' => 'text',
				'backend' => '',
				'label' => 'Tiempo de garantía',
				'input' => 'select',
				'class' => '',
				'source' => \Andromeda\Attributes\Model\Config\Garantia\WarrantyOptions::class,
				'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_GLOBAL,
				'visible' => true,
				'required' => true,
				'user_defined' => false,
				'default' => '',
				'searchable' => false,
				'filterable' => false,
				'comparable' => false,
				'visible_on_front' => true,
				'used_in_product_listing' => true,
				'unique' => false,
				'apply_to' => ''
			]
		);

		// *****************
		// **  Accesorios **
		// *****************

		$eavSetup = $this->eavSetupFactory->create(['setup' => $setup]);
		$eavSetup->addAttribute(
			\Magento\Catalog\Model\Product::ENTITY,
			'kit_teclado_mouse',
			[
				'type' => 'text',
				'backend' => '',
				'label' => 'Accesorios: Kit teclado y mouse',
				'input' => 'select',
				'class' => '',
				'source' => \Andromeda\Attributes\Model\Config\Accesorios\KeyboardMouseKitOptions::class,
				'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_GLOBAL,
				'visible' => true,
				'required' => false,
				'user_defined' => false,
				'default' => '',
				'searchable' => false,
				'filterable' => false,
				'comparable' => false,
				'visible_on_front' => true,
				'used_in_product_listing' => true,
				'unique' => false,
				'apply_to' => ''
			]
		);

		$eavSetup = $this->eavSetupFactory->create(['setup' => $setup]);
		$eavSetup->addAttribute(
			\Magento\Catalog\Model\Product::ENTITY,
			'parlantes_de_escritorio',
			[
				'type' => 'text',
				'backend' => '',
				'label' => 'Accesorios: Parlantes de escritorio',
				'input' => 'select',
				'class' => '',
				'source' => \Andromeda\Attributes\Model\Config\Accesorios\DesktopSpeakersOptions::class,
				'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_GLOBAL,
				'visible' => true,
				'required' => false,
				'user_defined' => false,
				'default' => '',
				'searchable' => false,
				'filterable' => false,
				'comparable' => false,
				'visible_on_front' => true,
				'used_in_product_listing' => true,
				'unique' => false,
				'apply_to' => ''
			]
		);

		$eavSetup = $this->eavSetupFactory->create(['setup' => $setup]);
		$eavSetup->addAttribute(
			\Magento\Catalog\Model\Product::ENTITY,
			'parlantes_de_escritorio',
			[
				'type' => 'text',
				'backend' => '',
				'label' => 'Accesorios: Parlantes de escritorio',
				'input' => 'select',
				'class' => '',
				'source' => '',
				'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_GLOBAL,
				'visible' => true,
				'required' => false,
				'user_defined' => false,
				'default' => '',
				'searchable' => false,
				'filterable' => false,
				'comparable' => false,
				'visible_on_front' => true,
				'used_in_product_listing' => true,
				'unique' => false,
				'apply_to' => ''
			]
		);

		$eavSetup = $this->eavSetupFactory->create(['setup' => $setup]);
		$eavSetup->addAttribute(
			\Magento\Catalog\Model\Product::ENTITY,
			'soporte_vesa',
			[
				'type' => 'text',
				'backend' => '',
				'label' => 'Accesorios: Soporte VESA',
				'input' => 'select',
				'class' => '',
				'source' => \Andromeda\Attributes\Model\Config\Accesorios\VesaSupportOptions::class,
				'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_GLOBAL,
				'visible' => true,
				'required' => false,
				'user_defined' => false,
				'default' => '',
				'searchable' => false,
				'filterable' => false,
				'comparable' => false,
				'visible_on_front' => true,
				'used_in_product_listing' => true,
				'unique' => false,
				'apply_to' => ''
			]
		);

		// *****************
		// **  Origen **
		// *****************

		$eavSetup = $this->eavSetupFactory->create(['setup' => $setup]);
		$eavSetup->addAttribute(
			\Magento\Catalog\Model\Product::ENTITY,
			'pais_de_fabricacion',
			[
				'type' => 'text',
				'backend' => '',
				'label' => 'Origen: País de Fabricación',
				'input' => 'select',
				'class' => '',
				'source' => \Andromeda\Attributes\Model\Config\Origen\MadeInOptions::class,
				'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_GLOBAL,
				'visible' => true,
				'required' => true,
				'user_defined' => false,
				'default' => '',
				'searchable' => false,
				'filterable' => false,
				'comparable' => false,
				'visible_on_front' => true,
				'used_in_product_listing' => true,
				'unique' => false,
				'apply_to' => ''
			]
		);




		$setup->endSetup();

	}
}