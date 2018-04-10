<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appDevDebugProjectContainerUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        '_wdt' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:toolbarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_wdt',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_bar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchBarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search_bar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_phpinfo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/phpinfo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_results' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchResultsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search/results',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_open_file' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:openAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/open',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_router' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.router:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/router',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception_css' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:cssAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception.css',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_twig_error_test' => array (  0 =>   array (    0 => 'code',    1 => '_format',  ),  1 =>   array (    '_controller' => 'twig.controller.preview_error:previewErrorPageAction',    '_format' => 'html',  ),  2 =>   array (    'code' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => '[^/]++',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'code',    ),    2 =>     array (      0 => 'text',      1 => '/_error',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'new_childSubject' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ChildSubjectController::createAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/childSubject/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'list_childSubjects' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ChildSubjectController::listAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/childSubject/list',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'edit_childSubject' => array (  0 =>   array (    0 => 'childSubjectId',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ChildSubjectController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'childSubjectId',    ),    1 =>     array (      0 => 'text',      1 => '/childSubjects/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'delete_childSubject' => array (  0 =>   array (    0 => 'childSubjectId',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ChildSubjectController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'childSubjectId',    ),    1 =>     array (      0 => 'text',      1 => '/childSubjects/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'new_class' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ClasssController::createAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/class/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'list_classes' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ClasssController::listAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/class/list',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'class_profile' => array (  0 =>   array (    0 => 'classId',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ClasssController::profileAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'classId',    ),    1 =>     array (      0 => 'text',      1 => '/class/profile',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'edit_class' => array (  0 =>   array (    0 => 'classId',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ClasssController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'classId',    ),    1 =>     array (      0 => 'text',      1 => '/classs/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'delete_class' => array (  0 =>   array (    0 => 'classId',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ClasssController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'classId',    ),    1 =>     array (      0 => 'text',      1 => '/classs/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'update_config' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ConfigController::setAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/settings',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'new_examCompany' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ExamCompanyController::createAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/examCompany/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'list_examCompanies' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ExamCompanyController::listAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/examCompany/list',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'edit_examCompany' => array (  0 =>   array (    0 => 'examCompanyId',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ExamCompanyController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'examCompanyId',    ),    1 =>     array (      0 => 'text',      1 => '/examCompanies/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'delete_examCompany' => array (  0 =>   array (    0 => 'examCompanyId',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ExamCompanyController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'examCompanyId',    ),    1 =>     array (      0 => 'text',      1 => '/examCompanies/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'user_registration' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\RegistrationController::registerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'record_exam_ajax_child' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ScoreChildController::recordChildAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exam/ajax/record/child',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'record_scores' => array (  0 =>   array (    0 => 'classId',    1 => 'companyId',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ScoreController::updateAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'companyId',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'classId',    ),    2 =>     array (      0 => 'text',      1 => '/scores/record',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'record_summary' => array (  0 =>   array (    0 => 'classId',    1 => 'companyId',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ScoreController::summaryAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'companyId',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'classId',    ),    2 =>     array (      0 => 'text',      1 => '/scores/summary',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'download_exam' => array (  0 =>   array (    0 => 'classId',    1 => 'companyId',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ScoreController::downloadAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'companyId',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'classId',    ),    2 =>     array (      0 => 'text',      1 => '/scores/download',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'download_exam_img' => array (  0 =>   array (    0 => 'classId',    1 => 'companyId',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ScoreController::downloadImgAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'companyId',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'classId',    ),    2 =>     array (      0 => 'text',      1 => '/scores/image',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'record_exam_ajax' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ScoreController::recordAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exam/ajax/record',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\SecurityController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'new_student' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\StudentController::createAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/student/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'list_students' => array (  0 =>   array (    0 => 'classId',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\StudentController::listAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'classId',    ),    1 =>     array (      0 => 'text',      1 => '/student/list',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'student_profile' => array (  0 =>   array (    0 => 'studentId',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\StudentController::profileAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'studentId',    ),    1 =>     array (      0 => 'text',      1 => '/student/profile',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'choose_class' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\StudentController::chooseAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/student/class/choose',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'edit_student' => array (  0 =>   array (    0 => 'studentId',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\StudentController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'studentId',    ),    1 =>     array (      0 => 'text',      1 => '/students/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'delete_student' => array (  0 =>   array (    0 => 'studentId',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\StudentController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'studentId',    ),    1 =>     array (      0 => 'text',      1 => '/students/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'new_subject' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\SubjectController::createAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/subject/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'list_subjects' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\SubjectController::listAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/subject/list',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'edit_subject' => array (  0 =>   array (    0 => 'subjectId',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\SubjectController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'subjectId',    ),    1 =>     array (      0 => 'text',      1 => '/subjects/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'delete_subject' => array (  0 =>   array (    0 => 'subjectId',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\SubjectController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'subjectId',    ),    1 =>     array (      0 => 'text',      1 => '/subjects/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'logout' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
