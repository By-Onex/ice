<?php

/**
 * Автоматическое создание статических геттеров для сервисов
 *
 * @author Apostle
 */
class App extends App_Abstract
{
    /**
     * @return Acl_Manager
     */
    public static function aclManager()
    {
        return IcEngine::serviceLocator()
            ->getService('aclManager');
    }

    /**
     * @return Acl_Provider_Manager
     */
    public static function aclProviderManager()
    {
        return IcEngine::serviceLocator()
            ->getService('aclProviderManager');
    }

    /**
     * @return Acl_Manager/aclProvider
     */
    public static function aclProviderTable()
    {
        return IcEngine::serviceLocator()
            ->getService('aclProviderTable');
    }

    /**
     * @return Acl_Role
     */
    public static function aclRole()
    {
        return IcEngine::serviceLocator()
            ->getService('aclRole');
    }

    /**
     * @return Activation
     */
    public static function activation()
    {
        return IcEngine::serviceLocator()
            ->getService('activation');
    }

    /**
     * @return Annotation_Model_Manager
     */
    public static function annotationModelManager()
    {
        return IcEngine::serviceLocator()
            ->getService('annotationModelManager');
    }

    /**
     * @return Api_Command_Manager
     */
    public static function apiCommandManager()
    {
        return IcEngine::serviceLocator()
            ->getService('apiCommandManager');
    }

    /**
     * @return Api_Connector_Manager
     */
    public static function apiConnectorManager()
    {
        return IcEngine::serviceLocator()
            ->getService('apiConnectorManager');
    }

    /**
     * @return Api_Error
     */
    public static function apiError()
    {
        return IcEngine::serviceLocator()
            ->getService('apiError');
    }

    /**
     * @return Api_Manager
     */
    public static function apiManager()
    {
        return IcEngine::serviceLocator()
            ->getService('apiManager');
    }

    /**
     * @return Api_Transport_Manager
     */
    public static function apiTransportManager()
    {
        return IcEngine::serviceLocator()
            ->getService('apiTransportManager');
    }

    /**
     * @return Attribute_Manager
     */
    public static function attributeManager()
    {
        return IcEngine::serviceLocator()
            ->getService('attributeManager');
    }

    /**
     * @return Authorization
     */
    public static function authorization()
    {
        return IcEngine::serviceLocator()
            ->getService('authorization');
    }

    /**
     * @return Authorization_Log
     */
    public static function authorizationLog()
    {
        return IcEngine::serviceLocator()
            ->getService('authorizationLog');
    }

    /**
     * @return Authorization_Loginza_Token
     */
    public static function authorizationLoginzaToken()
    {
        return IcEngine::serviceLocator()
            ->getService('authorizationLoginzaToken');
    }

    /**
     * @return Bread_Crumb
     */
    public static function breadCrumb()
    {
        return IcEngine::serviceLocator()
            ->getService('breadCrumb');
    }

    /**
     * @return Cache_Block_Manager
     */
    public static function cacheBlockManager()
    {
        return IcEngine::serviceLocator()
            ->getService('cacheBlockManager');
    }

    /**
     * @return Cache_Block_Specification_Manager
     */
    public static function cacheBlockSpecificationManager()
    {
        return IcEngine::serviceLocator()
            ->getService('cacheBlockSpecificationManager');
    }

    /**
     * @return Cache_Manager
     */
    public static function cacheManager()
    {
        return IcEngine::serviceLocator()
            ->getService('cacheManager');
    }

    /**
     * @return Model_Collection_Manager
     */
    public static function collectionManager()
    {
        return IcEngine::serviceLocator()
            ->getService('collectionManager');
    }

    /**
     * @return Config_Manager
     */
    public static function configManager()
    {
        return IcEngine::serviceLocator()
            ->getService('configManager');
    }

    /**
     * @return Controller_Action_Modifier_Manager
     */
    public static function controllerActionModifierManager()
    {
        return IcEngine::serviceLocator()
            ->getService('controllerActionModifierManager');
    }

    /**
     * @return Controller_Dispatcher
     */
    public static function controllerDispatcher()
    {
        return IcEngine::serviceLocator()
            ->getService('controllerDispatcher');
    }

    /**
     * @return Controller_Front_Strategy_Manager
     */
    public static function controllerFrontStrategyManager()
    {
        return IcEngine::serviceLocator()
            ->getService('controllerFrontStrategyManager');
    }

    /**
     * @return Controller_Manager
     */
    public static function controllerManager()
    {
        return IcEngine::serviceLocator()
            ->getService('controllerManager');
    }

    /**
     * @return Controller_Tag_Manager
     */
    public static function controllerTagManager()
    {
        return IcEngine::serviceLocator()
            ->getService('controllerTagManager');
    }

    /**
     * @return Controller_Validator_Exception_Manager
     */
    public static function controllerValidatorExceptionManager()
    {
        return IcEngine::serviceLocator()
            ->getService('controllerValidatorExceptionManager');
    }

    /**
     * @return Controller_Validator_Manager
     */
    public static function controllerValidatorManager()
    {
        return IcEngine::serviceLocator()
            ->getService('controllerValidatorManager');
    }

    /**
     * @return Create_Class_Strategy_Manager
     */
    public static function createClassStrategyManager()
    {
        return IcEngine::serviceLocator()
            ->getService('createClassStrategyManager');
    }

    /**
     * @return Crypt_Manager
     */
    public static function cryptManager()
    {
        return IcEngine::serviceLocator()
            ->getService('cryptManager');
    }

    /**
     * @return Data_Driver_Manager
     */
    public static function dataDriverManager()
    {
        return IcEngine::serviceLocator()
            ->getService('dataDriverManager');
    }

    /**
     * @return Data_Filter_Manager
     */
    public static function dataFilterManager()
    {
        return IcEngine::serviceLocator()
            ->getService('dataFilterManager');
    }

    /**
     * @return View_Cache_Fragment_Manager/provider
     */
    public static function dataProviderBlock()
    {
        return IcEngine::serviceLocator()
            ->getService('dataProviderBlock');
    }

    /**
     * @return Helper_Migration_Sequence/provider
     */
    public static function dataProviderFile()
    {
        return IcEngine::serviceLocator()
            ->getService('dataProviderFile');
    }

    /**
     * @return Data_Provider_Manager
     */
    public static function dataProviderManager()
    {
        return IcEngine::serviceLocator()
            ->getService('dataProviderManager');
    }

    /**
     * @return Data_Scheme_Manager
     */
    public static function dataSchemeManager()
    {
        return IcEngine::serviceLocator()
            ->getService('dataSchemeManager');
    }

    /**
     * @return Data_Source
     */
    public static function dataSource()
    {
        return IcEngine::serviceLocator()
            ->getService('dataSource');
    }

    /**
     * @return Data_Source_Manager
     */
    public static function dataSourceManager()
    {
        return IcEngine::serviceLocator()
            ->getService('dataSourceManager');
    }

    /**
     * @return Data_Transport_Manager
     */
    public static function dataTransportManager()
    {
        return IcEngine::serviceLocator()
            ->getService('dataTransportManager');
    }

    /**
     * @return Data_Validator
     */
    public static function dataValidator()
    {
        return IcEngine::serviceLocator()
            ->getService('dataValidator');
    }

    /**
     * @return Data_Validator_Manager
     */
    public static function dataValidatorManager()
    {
        return IcEngine::serviceLocator()
            ->getService('dataValidatorManager');
    }

    /**
     * @return DDS
     */
    public static function dds()
    {
        return IcEngine::serviceLocator()
            ->getService('dds');
    }

    /**
     * @return Debug
     */
    public static function debug()
    {
        return IcEngine::serviceLocator()
            ->getService('debug');
    }

    /**
     * @return Device
     */
    public static function device()
    {
        return IcEngine::serviceLocator()
            ->getService('device');
    }

    /**
     * @return Dto
     */
    public static function dto()
    {
        return IcEngine::serviceLocator()
            ->getService('dto');
    }

    /**
     * @return Error_Render
     */
    public static function errorRender()
    {
        return IcEngine::serviceLocator()
            ->getService('errorRender');
    }

    /**
     * @return Event_Manager
     */
    public static function eventManager()
    {
        return IcEngine::serviceLocator()
            ->getService('eventManager');
    }

    /**
     * @return Executor
     */
    public static function executor()
    {
        return IcEngine::serviceLocator()
            ->getService('executor');
    }

    /**
     * @return Form_Builder
     */
    public static function formBuilder()
    {
        return IcEngine::serviceLocator()
            ->getService('formBuilder');
    }

    /**
     * @return Geo_Distance_Calculator
     */
    public static function geoDistanceCalculator()
    {
        return IcEngine::serviceLocator()
            ->getService('geoDistanceCalculator');
    }

    /**
     * @return Helper_Activation
     */
    public static function helperActivation()
    {
        return IcEngine::serviceLocator()
            ->getService('helperActivation');
    }

    /**
     * @return Helper_Admin_Redirect
     */
    public static function helperAdminRedirect()
    {
        return IcEngine::serviceLocator()
            ->getService('helperAdminRedirect');
    }

    /**
     * @return Helper_Admin_User
     */
    public static function helperAdminUser()
    {
        return IcEngine::serviceLocator()
            ->getService('helperAdminUser');
    }

    /**
     * @return Helper_Annotation
     */
    public static function helperAnnotation()
    {
        return IcEngine::serviceLocator()
            ->getService('helperAnnotation');
    }

    /**
     * @return Helper_Annotation_Generator
     */
    public static function helperAnnotationGenerator()
    {
        return IcEngine::serviceLocator()
            ->getService('helperAnnotationGenerator');
    }

    /**
     * @return Helper_Annotation_Model
     */
    public static function helperAnnotationModel()
    {
        return IcEngine::serviceLocator()
            ->getService('helperAnnotationModel');
    }

    /**
     * @return Helper_Annotation_Model_Field
     */
    public static function helperAnnotationModelField()
    {
        return IcEngine::serviceLocator()
            ->getService('helperAnnotationModelField');
    }

    /**
     * @return Helper_Annotation_Orm
     */
    public static function helperAnnotationOrm()
    {
        return IcEngine::serviceLocator()
            ->getService('helperAnnotationOrm');
    }

    /**
     * @return Helper_Annotation_Schedule
     */
    public static function helperAnnotationSchedule()
    {
        return IcEngine::serviceLocator()
            ->getService('helperAnnotationSchedule');
    }

    /**
     * @return Helper_Api
     */
    public static function helperApi()
    {
        return IcEngine::serviceLocator()
            ->getService('helperApi');
    }

    /**
     * @return Helper_Array
     */
    public static function helperArray()
    {
        return IcEngine::serviceLocator()
            ->getService('helperArray');
    }

    /**
     * @return Helper_Behavior
     */
    public static function helperBehavior()
    {
        return IcEngine::serviceLocator()
            ->getService('helperBehavior');
    }

    /**
     * @return Helper_Class
     */
    public static function helperClass()
    {
        return IcEngine::serviceLocator()
            ->getService('helperClass');
    }

    /**
     * @return Helper_Cli
     */
    public static function helperCli()
    {
        return IcEngine::serviceLocator()
            ->getService('helperCli');
    }

    /**
     * @return Helper_Cli_Progress_Bar
     */
    public static function helperCliProgressBar()
    {
        return IcEngine::serviceLocator()
            ->getService('helperCliProgressBar');
    }

    /**
     * @return Helper_Code_Generator
     */
    public static function helperCodeGenerator()
    {
        return IcEngine::serviceLocator()
            ->getService('helperCodeGenerator');
    }

    /**
     * @return Helper_Compile
     */
    public static function helperCompile()
    {
        return IcEngine::serviceLocator()
            ->getService('helperCompile');
    }

    /**
     * @return Helper_Component
     */
    public static function helperComponent()
    {
        return IcEngine::serviceLocator()
            ->getService('helperComponent');
    }

    /**
     * @return Helper_Converter
     */
    public static function helperConverter()
    {
        return IcEngine::serviceLocator()
            ->getService('helperConverter');
    }

    /**
     * @return Helper_Csv
     */
    public static function helperCsv()
    {
        return IcEngine::serviceLocator()
            ->getService('helperCsv');
    }

    /**
     * @return Helper_Date
     */
    public static function helperDate()
    {
        return IcEngine::serviceLocator()
            ->getService('helperDate');
    }

    /**
     * @return Helper_Email
     */
    public static function helperEmail()
    {
        return IcEngine::serviceLocator()
            ->getService('helperEmail');
    }

    /**
     * @return Helper_Env
     */
    public static function helperEnv()
    {
        return IcEngine::serviceLocator()
            ->getService('helperEnv');
    }

    /**
     * @return Helper_Event
     */
    public static function helperEvent()
    {
        return IcEngine::serviceLocator()
            ->getService('helperEvent');
    }

    /**
     * @return Helper_File
     */
    public static function helperFile()
    {
        return IcEngine::serviceLocator()
            ->getService('helperFile');
    }

    /**
     * @return Helper_GeoIP
     */
    public static function helperGeoIP()
    {
        return IcEngine::serviceLocator()
            ->getService('helperGeoIP');
    }

    /**
     * @return Helper_Hash
     */
    public static function helperHash()
    {
        return IcEngine::serviceLocator()
            ->getService('helperHash');
    }

    /**
     * @return Helper_Header
     */
    public static function helperHeader()
    {
        return IcEngine::serviceLocator()
            ->getService('helperHeader');
    }

    /**
     * @return Helper_Image
     */
    public static function helperImage()
    {
        return IcEngine::serviceLocator()
            ->getService('helperImage');
    }

    /**
     * @return Helper_Image_Resize
     */
    public static function helperImageResize()
    {
        return IcEngine::serviceLocator()
            ->getService('helperImageResize');
    }

    /**
     * @return Helper_Json
     */
    public static function helperJson()
    {
        return IcEngine::serviceLocator()
            ->getService('helperJson');
    }

    /**
     * @return Helper_Link
     */
    public static function helperLink()
    {
        return IcEngine::serviceLocator()
            ->getService('helperLink');
    }

    /**
     * @return Helper_Map
     */
    public static function helperMap()
    {
        return IcEngine::serviceLocator()
            ->getService('helperMap');
    }

    /**
     * @return Helper_Metagraphy
     */
    public static function helperMetagraphy()
    {
        return IcEngine::serviceLocator()
            ->getService('helperMetagraphy');
    }

    /**
     * @return Helper_Migration
     */
    public static function helperMigration()
    {
        return IcEngine::serviceLocator()
            ->getService('helperMigration');
    }

    /**
     * @return Helper_Migration_Log
     */
    public static function helperMigrationLog()
    {
        return IcEngine::serviceLocator()
            ->getService('helperMigrationLog');
    }

    /**
     * @return Helper_Migration_Mark
     */
    public static function helperMigrationMark()
    {
        return IcEngine::serviceLocator()
            ->getService('helperMigrationMark');
    }

    /**
     * @return Helper_Migration_Model
     */
    public static function helperMigrationModel()
    {
        return IcEngine::serviceLocator()
            ->getService('helperMigrationModel');
    }

    /**
     * @return Helper_Migration_Process
     */
    public static function helperMigrationProcess()
    {
        return IcEngine::serviceLocator()
            ->getService('helperMigrationProcess');
    }

    /**
     * @return Helper_Migration_Queue
     */
    public static function helperMigrationQueue()
    {
        return IcEngine::serviceLocator()
            ->getService('helperMigrationQueue');
    }

    /**
     * @return Helper_Migration_Sequence
     */
    public static function helperMigrationSequence()
    {
        return IcEngine::serviceLocator()
            ->getService('helperMigrationSequence');
    }

    /**
     * @return Helper_Model
     */
    public static function helperModel()
    {
        return IcEngine::serviceLocator()
            ->getService('helperModel');
    }

    /**
     * @return Helper_Model_Acl
     */
    public static function helperModelAcl()
    {
        return IcEngine::serviceLocator()
            ->getService('helperModelAcl');
    }

    /**
     * @return Helper_Model_Acl_Annotation
     */
    public static function helperModelAclAnnotation()
    {
        return IcEngine::serviceLocator()
            ->getService('helperModelAclAnnotation');
    }

    /**
     * @return Helper_Model_Acl_Config
     */
    public static function helperModelAclConfig()
    {
        return IcEngine::serviceLocator()
            ->getService('helperModelAclConfig');
    }

    /**
     * @return Helper_Model_Acl_Sync
     */
    public static function helperModelAclSync()
    {
        return IcEngine::serviceLocator()
            ->getService('helperModelAclSync');
    }

    /**
     * @return Helper_Model_Acl_Table
     */
    public static function helperModelAclTable()
    {
        return IcEngine::serviceLocator()
            ->getService('helperModelAclTable');
    }

    /**
     * @return Helper_Model_Collection
     */
    public static function helperModelCollection()
    {
        return IcEngine::serviceLocator()
            ->getService('helperModelCollection');
    }

    /**
     * @return Helper_Model_Create
     */
    public static function helperModelCreate()
    {
        return IcEngine::serviceLocator()
            ->getService('helperModelCreate');
    }

    /**
     * @return Helper_Model_Event
     */
    public static function helperModelEvent()
    {
        return IcEngine::serviceLocator()
            ->getService('helperModelEvent');
    }

    /**
     * @return Helper_Model_Import
     */
    public static function helperModelImport()
    {
        return IcEngine::serviceLocator()
            ->getService('helperModelImport');
    }

    /**
     * @return Helper_Model_Import/input
     */
    public static function helperModelImportInput()
    {
        return IcEngine::serviceLocator()
            ->getService('helperModelImportInput');
    }

    /**
     * @return Helper_Model_Manager
     */
    public static function helperModelManager()
    {
        return IcEngine::serviceLocator()
            ->getService('helperModelManager');
    }

    /**
     * @return Helper_Model_Migrate_Diff
     */
    public static function helperModelMigrateDiff()
    {
        return IcEngine::serviceLocator()
            ->getService('helperModelMigrateDiff');
    }

    /**
     * @return Helper_Model_Migrate_Rebuild
     */
    public static function helperModelMigrateRebuild()
    {
        return IcEngine::serviceLocator()
            ->getService('helperModelMigrateRebuild');
    }

    /**
     * @return Helper_Model_Migrate_Sync
     */
    public static function helperModelMigrateSync()
    {
        return IcEngine::serviceLocator()
            ->getService('helperModelMigrateSync');
    }

    /**
     * @return Helper_Model_Missing
     */
    public static function helperModelMissing()
    {
        return IcEngine::serviceLocator()
            ->getService('helperModelMissing');
    }

    /**
     * @return Helper_Model_Option
     */
    public static function helperModelOption()
    {
        return IcEngine::serviceLocator()
            ->getService('helperModelOption');
    }

    /**
     * @return Helper_Model_Scheme
     */
    public static function helperModelScheme()
    {
        return IcEngine::serviceLocator()
            ->getService('helperModelScheme');
    }

    /**
     * @return Helper_Model_Scheme/input
     */
    public static function helperModelSchemeInput()
    {
        return IcEngine::serviceLocator()
            ->getService('helperModelSchemeInput');
    }

    /**
     * @return Helper_Model_Sync
     */
    public static function helperModelSync()
    {
        return IcEngine::serviceLocator()
            ->getService('helperModelSync');
    }

    /**
     * @return Helper_Model_Table
     */
    public static function helperModelTable()
    {
        return IcEngine::serviceLocator()
            ->getService('helperModelTable');
    }

    /**
     * @return Helper_Mysql
     */
    public static function helperMysql()
    {
        return IcEngine::serviceLocator()
            ->getService('helperMysql');
    }

    /**
     * @return Helper_Network
     */
    public static function helperNetwork()
    {
        return IcEngine::serviceLocator()
            ->getService('helperNetwork');
    }

    /**
     * @return Helper_Plural
     */
    public static function helperPlural()
    {
        return IcEngine::serviceLocator()
            ->getService('helperPlural');
    }

    /**
     * @return Helper_Query_Translator_Mysql
     */
    public static function helperQueryTranslatorMysql()
    {
        return IcEngine::serviceLocator()
            ->getService('helperQueryTranslatorMysql');
    }

    /**
     * @return Helper_Router
     */
    public static function helperRouter()
    {
        return IcEngine::serviceLocator()
            ->getService('helperRouter');
    }

    /**
     * @return Helper_Schedule
     */
    public static function helperSchedule()
    {
        return IcEngine::serviceLocator()
            ->getService('helperSchedule');
    }

    /**
     * @return Helper_Service
     */
    public static function helperService()
    {
        return IcEngine::serviceLocator()
            ->getService('helperService');
    }

    /**
     * @return Helper_Site_Location
     */
    public static function helperSiteLocation()
    {
        return IcEngine::serviceLocator()
            ->getService('helperSiteLocation');
    }

    /**
     * @return Helper_String
     */
    public static function helperString()
    {
        return IcEngine::serviceLocator()
            ->getService('helperString');
    }

    /**
     * @return Helper_Translit
     */
    public static function helperTranslit()
    {
        return IcEngine::serviceLocator()
            ->getService('helperTranslit');
    }

    /**
     * @return Helper_Unique
     */
    public static function helperUnique()
    {
        return IcEngine::serviceLocator()
            ->getService('helperUnique');
    }

    /**
     * @return Helper_Url
     */
    public static function helperUrl()
    {
        return IcEngine::serviceLocator()
            ->getService('helperUrl');
    }

    /**
     * @return Helper_View_Resource
     */
    public static function helperViewResource()
    {
        return IcEngine::serviceLocator()
            ->getService('helperViewResource');
    }

    /**
     * @return Helper_Xml
     */
    public static function helperXml()
    {
        return IcEngine::serviceLocator()
            ->getService('helperXml');
    }

    /**
     * @return Helper_Yandex_Original_Text
     */
    public static function helperYandexOriginalText()
    {
        return IcEngine::serviceLocator()
            ->getService('helperYandexOriginalText');
    }

    /**
     * @return Html_Form_Field_Manager
     */
    public static function htmlFormFieldManager()
    {
        return IcEngine::serviceLocator()
            ->getService('htmlFormFieldManager');
    }

    /**
     * @return Html_Form_Field_Select_Option_Manager
     */
    public static function htmlFormFieldSelectOptionManager()
    {
        return IcEngine::serviceLocator()
            ->getService('htmlFormFieldSelectOptionManager');
    }

    /**
     * @return Html_Form_Manager
     */
    public static function htmlFormManager()
    {
        return IcEngine::serviceLocator()
            ->getService('htmlFormManager');
    }

    /**
     * @return Loader
     */
    public static function loader()
    {
        return IcEngine::serviceLocator()
            ->getService('loader');
    }

    /**
     * @return Loader_Auto
     */
    public static function loaderAuto()
    {
        return IcEngine::serviceLocator()
            ->getService('loaderAuto');
    }

    /**
     * @return Loginza_Parser
     */
    public static function loginzaParser()
    {
        return IcEngine::serviceLocator()
            ->getService('loginzaParser');
    }

    /**
     * @return Mail_Message
     */
    public static function mailMessage()
    {
        return IcEngine::serviceLocator()
            ->getService('mailMessage');
    }

    /**
     * @return Mail_Provider
     */
    public static function mailProvider()
    {
        return IcEngine::serviceLocator()
            ->getService('mailProvider');
    }

    /**
     * @return Mail_Template
     */
    public static function mailTemplate()
    {
        return IcEngine::serviceLocator()
            ->getService('mailTemplate');
    }

    /**
     * @return Migration_Manager
     */
    public static function migrationManager()
    {
        return IcEngine::serviceLocator()
            ->getService('migrationManager');
    }

    /**
     * @return Helper_Migration_Sequence/sequence
     */
    public static function migrationSequence()
    {
        return IcEngine::serviceLocator()
            ->getService('migrationSequence');
    }

    /**
     * @return Model_Collection_Processor_Manager
     */
    public static function modelCollectionProcessorManager()
    {
        return IcEngine::serviceLocator()
            ->getService('modelCollectionProcessorManager');
    }

    /**
     * @return Model_Collection_Processor_Pool
     */
    public static function modelCollectionProcessorPool()
    {
        return IcEngine::serviceLocator()
            ->getService('modelCollectionProcessorPool');
    }

    /**
     * @return Model_Event_Manager
     */
    public static function modelEventManager()
    {
        return IcEngine::serviceLocator()
            ->getService('modelEventManager');
    }

    /**
     * @return Model_Manager
     */
    public static function modelManager()
    {
        return IcEngine::serviceLocator()
            ->getService('modelManager');
    }

    /**
     * @return Model_Mapper
     */
    public static function modelMapper()
    {
        return IcEngine::serviceLocator()
            ->getService('modelMapper');
    }

    /**
     * @return Model_Mapper_Reference
     */
    public static function modelMapperReference()
    {
        return IcEngine::serviceLocator()
            ->getService('modelMapperReference');
    }

    /**
     * @return Model_Mapper_Scheme
     */
    public static function modelMapperScheme()
    {
        return IcEngine::serviceLocator()
            ->getService('modelMapperScheme');
    }

    /**
     * @return Model_Mapper_Scheme_Render
     */
    public static function modelMapperSchemeRender()
    {
        return IcEngine::serviceLocator()
            ->getService('modelMapperSchemeRender');
    }

    /**
     * @return Model_Option_Manager
     */
    public static function modelOptionManager()
    {
        return IcEngine::serviceLocator()
            ->getService('modelOptionManager');
    }

    /**
     * @return Model_Repository_Manager
     */
    public static function modelRepositoryManager()
    {
        return IcEngine::serviceLocator()
            ->getService('modelRepositoryManager');
    }

    /**
     * @return Model_Scheme
     */
    public static function modelScheme()
    {
        return IcEngine::serviceLocator()
            ->getService('modelScheme');
    }

    /**
     * @return Module_Manager
     */
    public static function moduleManager()
    {
        return IcEngine::serviceLocator()
            ->getService('moduleManager');
    }

    /**
     * @return Multipaginator
     */
    public static function multipaginator()
    {
        return IcEngine::serviceLocator()
            ->getService('multipaginator');
    }

    /**
     * @return Page_Title
     */
    public static function pageTitle()
    {
        return IcEngine::serviceLocator()
            ->getService('pageTitle');
    }

    /**
     * @return Page_Title_Specification_Manager
     */
    public static function pageTitleSpecificationManager()
    {
        return IcEngine::serviceLocator()
            ->getService('pageTitleSpecificationManager');
    }

    /**
     * @return Paginator
     */
    public static function paginator()
    {
        return IcEngine::serviceLocator()
            ->getService('paginator');
    }

    /**
     * @return IU_Post_Editor
     */
    public static function postEditor()
    {
        return IcEngine::serviceLocator()
            ->getService('postEditor');
    }

    /**
     * @return IU_Post_Editor_Pool
     */
    public static function postEditorPool()
    {
        return IcEngine::serviceLocator()
            ->getService('postEditorPool');
    }

    /**
     * @return Query
     */
    public static function query()
    {
        return IcEngine::serviceLocator()
            ->getService('query');
    }

    /**
     * @return Query
     */
    public static function queryBuilder()
    {
        return IcEngine::serviceLocator()
            ->getService('queryBuilder');
    }

    /**
     * @return Query_Command_Broker
     */
    public static function queryCommandBroker()
    {
        return IcEngine::serviceLocator()
            ->getService('queryCommandBroker');
    }

    /**
     * @return Query_Command_Pool
     */
    public static function queryCommandPool()
    {
        return IcEngine::serviceLocator()
            ->getService('queryCommandPool');
    }

    /**
     * @return Query_Translator
     */
    public static function queryTranslator()
    {
        return IcEngine::serviceLocator()
            ->getService('queryTranslator');
    }

    /**
     * @return Registry
     */
    public static function registry()
    {
        return IcEngine::serviceLocator()
            ->getService('registry');
    }

    /**
     * @return Request
     */
    public static function request()
    {
        return IcEngine::serviceLocator()
            ->getService('request');
    }

    /**
     * @return Resource_Manager
     */
    public static function resourceManager()
    {
        return IcEngine::serviceLocator()
            ->getService('resourceManager');
    }

    /**
     * @return Route
     */
    public static function route()
    {
        return IcEngine::serviceLocator()
            ->getService('route');
    }

    /**
     * @return Route/provider
     */
    public static function routeCache()
    {
        return IcEngine::serviceLocator()
            ->getService('routeCache');
    }

    /**
     * @return Route_Param_Extractor_Manager
     */
    public static function routeParamExtractorManager()
    {
        return IcEngine::serviceLocator()
            ->getService('routeParamExtractorManager');
    }

    /**
     * @return Router
     */
    public static function router()
    {
        return IcEngine::serviceLocator()
            ->getService('router');
    }

    /**
     * @return Sequence_Manager
     */
    public static function sequenceManager()
    {
        return IcEngine::serviceLocator()
            ->getService('sequenceManager');
    }

    /**
     * @return Service_Code_Analyze
     */
    public static function serviceCodeAnalyze()
    {
        return IcEngine::serviceLocator()
            ->getService('serviceCodeAnalyze');
    }

    /**
     * @return Service_Data_Transport
     */
    public static function serviceDataTransport()
    {
        return IcEngine::serviceLocator()
            ->getService('serviceDataTransport');
    }

    /**
     * @return Service_Email_Blacklist
     */
    public static function serviceEmailBlacklist()
    {
        return IcEngine::serviceLocator()
            ->getService('serviceEmailBlacklist');
    }

    /**
     * @return Service_Event_Slot
     */
    public static function serviceEventSlot()
    {
        return IcEngine::serviceLocator()
            ->getService('serviceEventSlot');
    }

    /**
     * @return Service_Http_Header
     */
    public static function serviceHttpHeader()
    {
        return IcEngine::serviceLocator()
            ->getService('serviceHttpHeader');
    }

    /**
     * @return Service_Injector
     */
    public static function serviceInjector()
    {
        return IcEngine::serviceLocator()
            ->getService('serviceInjector');
    }

    /**
     * @return Service_Queue
     */
    public static function serviceQueue()
    {
        return IcEngine::serviceLocator()
            ->getService('serviceQueue');
    }

    /**
     * @return Service_Route
     */
    public static function serviceRoute()
    {
        return IcEngine::serviceLocator()
            ->getService('serviceRoute');
    }

    /**
     * @return Service_Static_Css_Optimizator
     */
    public static function serviceStaticCssOptimizator()
    {
        return IcEngine::serviceLocator()
            ->getService('serviceStaticCssOptimizator');
    }

    /**
     * @return Service_Static_Sprite_Optimizator
     */
    public static function serviceStaticSpriteOptimizator()
    {
        return IcEngine::serviceLocator()
            ->getService('serviceStaticSpriteOptimizator');
    }

    /**
     * @return Service_Unsubscribe
     */
    public static function serviceUnsubscribe()
    {
        return IcEngine::serviceLocator()
            ->getService('serviceUnsubscribe');
    }

    /**
     * @return Session_Manager
     */
    public static function sessionManager()
    {
        return IcEngine::serviceLocator()
            ->getService('sessionManager');
    }

    /**
     * @return Session_Resource
     */
    public static function sessionResource()
    {
        return IcEngine::serviceLocator()
            ->getService('sessionResource');
    }

    /**
     * @return Shutdown_Manager
     */
    public static function shutdownManager()
    {
        return IcEngine::serviceLocator()
            ->getService('shutdownManager');
    }

    /**
     * @return Static_File
     */
    public static function staticFile()
    {
        return IcEngine::serviceLocator()
            ->getService('staticFile');
    }

    /**
     * @return Static_Sprite_Manager
     */
    public static function staticSpriteManager()
    {
        return IcEngine::serviceLocator()
            ->getService('staticSpriteManager');
    }

    /**
     * @return Controller_Sync
     */
    public static function sync()
    {
        return IcEngine::serviceLocator()
            ->getService('sync');
    }

    /**
     * @return Temp_Content
     */
    public static function tempContent()
    {
        return IcEngine::serviceLocator()
            ->getService('tempContent');
    }

    /**
     * @return Unit_Of_Work
     */
    public static function unitOfWork()
    {
        return IcEngine::serviceLocator()
            ->getService('unitOfWork');
    }

    /**
     * @return Unit_Of_Work_Manager
     */
    public static function unitOfWorkManager()
    {
        return IcEngine::serviceLocator()
            ->getService('unitOfWorkManager');
    }

    /**
     * @return Unit_Of_Work_Session
     */
    public static function unitOfWorkSession()
    {
        return IcEngine::serviceLocator()
            ->getService('unitOfWorkSession');
    }

    /**
     * @return User
     */
    public static function user()
    {
        return IcEngine::serviceLocator()
            ->getService('user');
    }

    /**
     * @return User_Cli
     */
    public static function userCli()
    {
        return IcEngine::serviceLocator()
            ->getService('userCli');
    }

    /**
     * @return User_Guest
     */
    public static function userGuest()
    {
        return IcEngine::serviceLocator()
            ->getService('userGuest');
    }

    /**
     * @return User_Loginza
     */
    public static function userLoginza()
    {
        return IcEngine::serviceLocator()
            ->getService('userLoginza');
    }

    /**
     * @return User_Session
     */
    public static function userSession()
    {
        return IcEngine::serviceLocator()
            ->getService('userSession');
    }

    /**
     * @return Validator_Error_Manager
     */
    public static function validatorErrorManager()
    {
        return IcEngine::serviceLocator()
            ->getService('validatorErrorManager');
    }

    /**
     * @return Validator_Manager
     */
    public static function validatorManager()
    {
        return IcEngine::serviceLocator()
            ->getService('validatorManager');
    }

    /**
     * @return View_Cache_Fragment_Manager
     */
    public static function viewCacheFragmentManager()
    {
        return IcEngine::serviceLocator()
            ->getService('viewCacheFragmentManager');
    }

    /**
     * @return View_Helper_Manager
     */
    public static function viewHelperManager()
    {
        return IcEngine::serviceLocator()
            ->getService('viewHelperManager');
    }

    /**
     * @return View_Render_Manager
     */
    public static function viewRenderManager()
    {
        return IcEngine::serviceLocator()
            ->getService('viewRenderManager');
    }

    /**
     * @return View_Resource_Manager
     */
    public static function viewResourceManager()
    {
        return IcEngine::serviceLocator()
            ->getService('viewResourceManager');
    }

    /**
     * @return Vo_Manager
     */
    public static function voManager()
    {
        return IcEngine::serviceLocator()
            ->getService('voManager');
    }
}
