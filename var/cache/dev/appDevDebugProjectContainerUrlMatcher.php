<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        elseif (0 === strpos($pathinfo, '/childSubject')) {
            // new_childSubject
            if ('/childSubject/new' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\ChildSubjectController::createAction',  '_route' => 'new_childSubject',);
            }

            // list_childSubjects
            if ('/childSubject/list' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\ChildSubjectController::listAction',  '_route' => 'list_childSubjects',);
            }

            // edit_childSubject
            if (0 === strpos($pathinfo, '/childSubjects/edit') && preg_match('#^/childSubjects/edit/(?P<childSubjectId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'edit_childSubject')), array (  '_controller' => 'AppBundle\\Controller\\ChildSubjectController::editAction',));
            }

            // delete_childSubject
            if (0 === strpos($pathinfo, '/childSubjects/delete') && preg_match('#^/childSubjects/delete/(?P<childSubjectId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_childSubject')), array (  '_controller' => 'AppBundle\\Controller\\ChildSubjectController::deleteAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/class')) {
            // new_class
            if ('/class/new' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\ClasssController::createAction',  '_route' => 'new_class',);
            }

            // list_classes
            if ('/class/list' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\ClasssController::listAction',  '_route' => 'list_classes',);
            }

            // class_profile
            if (0 === strpos($pathinfo, '/class/profile') && preg_match('#^/class/profile/(?P<classId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'class_profile')), array (  '_controller' => 'AppBundle\\Controller\\ClasssController::profileAction',));
            }

            // edit_class
            if (0 === strpos($pathinfo, '/classs/edit') && preg_match('#^/classs/edit/(?P<classId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'edit_class')), array (  '_controller' => 'AppBundle\\Controller\\ClasssController::editAction',));
            }

            // delete_class
            if (0 === strpos($pathinfo, '/classs/delete') && preg_match('#^/classs/delete/(?P<classId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_class')), array (  '_controller' => 'AppBundle\\Controller\\ClasssController::deleteAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/s')) {
            // update_config
            if ('/settings' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\ConfigController::setAction',  '_route' => 'update_config',);
            }

            if (0 === strpos($pathinfo, '/scores')) {
                // record_scores
                if (0 === strpos($pathinfo, '/scores/record') && preg_match('#^/scores/record/(?P<classId>[^/]++)/(?P<companyId>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'record_scores')), array (  '_controller' => 'AppBundle\\Controller\\ScoreController::updateAction',));
                }

                // report_forms
                if (0 === strpos($pathinfo, '/scores/reports') && preg_match('#^/scores/reports/(?P<classId>[^/]++)/(?P<companyId>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'report_forms')), array (  '_controller' => 'AppBundle\\Controller\\ScoreController::reportAction',));
                }

                // move_cursor
                if ('/scores/move' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\ScoreController::moveAction',  '_route' => 'move_cursor',);
                }

                // record_summary
                if (0 === strpos($pathinfo, '/scores/summary') && preg_match('#^/scores/summary/(?P<classId>[^/]++)/(?P<companyId>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'record_summary')), array (  '_controller' => 'AppBundle\\Controller\\ScoreController::summaryAction',));
                }

                // download_exam
                if (0 === strpos($pathinfo, '/scores/download') && preg_match('#^/scores/download/(?P<classId>[^/]++)/(?P<companyId>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'download_exam')), array (  '_controller' => 'AppBundle\\Controller\\ScoreController::downloadAction',));
                }

                // download_exam_img
                if (0 === strpos($pathinfo, '/scores/image') && preg_match('#^/scores/image/(?P<classId>[^/]++)/(?P<companyId>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'download_exam_img')), array (  '_controller' => 'AppBundle\\Controller\\ScoreController::downloadImgAction',));
                }

            }

            // move_cursor_child
            if ('/scoreChildren/move' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\ScoreController::moveChildAction',  '_route' => 'move_cursor_child',);
            }

            if (0 === strpos($pathinfo, '/student')) {
                // new_student
                if ('/student/new' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\StudentController::createAction',  '_route' => 'new_student',);
                }

                // list_students
                if (0 === strpos($pathinfo, '/student/list') && preg_match('#^/student/list/(?P<classId>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'list_students')), array (  '_controller' => 'AppBundle\\Controller\\StudentController::listAction',));
                }

                // student_profile
                if (0 === strpos($pathinfo, '/student/profile') && preg_match('#^/student/profile/(?P<studentId>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'student_profile')), array (  '_controller' => 'AppBundle\\Controller\\StudentController::profileAction',));
                }

                // choose_class
                if ('/student/class/choose' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\StudentController::chooseAction',  '_route' => 'choose_class',);
                }

                // edit_student
                if (0 === strpos($pathinfo, '/students/edit') && preg_match('#^/students/edit/(?P<studentId>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'edit_student')), array (  '_controller' => 'AppBundle\\Controller\\StudentController::editAction',));
                }

                // delete_student
                if (0 === strpos($pathinfo, '/students/delete') && preg_match('#^/students/delete/(?P<studentId>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_student')), array (  '_controller' => 'AppBundle\\Controller\\StudentController::deleteAction',));
                }

            }

            elseif (0 === strpos($pathinfo, '/subject')) {
                // new_subject
                if ('/subject/new' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\SubjectController::createAction',  '_route' => 'new_subject',);
                }

                // list_subjects
                if ('/subject/list' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\SubjectController::listAction',  '_route' => 'list_subjects',);
                }

                // edit_subject
                if (0 === strpos($pathinfo, '/subjects/edit') && preg_match('#^/subjects/edit/(?P<subjectId>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'edit_subject')), array (  '_controller' => 'AppBundle\\Controller\\SubjectController::editAction',));
                }

                // delete_subject
                if (0 === strpos($pathinfo, '/subjects/delete') && preg_match('#^/subjects/delete/(?P<subjectId>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_subject')), array (  '_controller' => 'AppBundle\\Controller\\SubjectController::deleteAction',));
                }

            }

        }

        // homepage
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/examCompan')) {
            // new_examCompany
            if ('/examCompany/new' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\ExamCompanyController::createAction',  '_route' => 'new_examCompany',);
            }

            // list_examCompanies
            if ('/examCompany/list' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\ExamCompanyController::listAction',  '_route' => 'list_examCompanies',);
            }

            // edit_examCompany
            if (0 === strpos($pathinfo, '/examCompanies/edit') && preg_match('#^/examCompanies/edit/(?P<examCompanyId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'edit_examCompany')), array (  '_controller' => 'AppBundle\\Controller\\ExamCompanyController::editAction',));
            }

            // delete_examCompany
            if (0 === strpos($pathinfo, '/examCompanies/delete') && preg_match('#^/examCompanies/delete/(?P<examCompanyId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete_examCompany')), array (  '_controller' => 'AppBundle\\Controller\\ExamCompanyController::deleteAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/exam/ajax/record')) {
            // record_exam_ajax_child
            if ('/exam/ajax/record/child' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\ScoreChildController::recordChildAction',  '_route' => 'record_exam_ajax_child',);
            }

            // record_exam_ajax
            if ('/exam/ajax/record' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\ScoreController::recordAction',  '_route' => 'record_exam_ajax',);
            }

        }

        // user_registration
        if ('/register' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'user_registration',);
        }

        // download_report
        if (0 === strpos($pathinfo, '/report/download') && preg_match('#^/report/download/(?P<classId>[^/]++)/(?P<companyId>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'download_report')), array (  '_controller' => 'AppBundle\\Controller\\ScoreController::repotAction',));
        }

        // login
        if ('/login' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
        }

        // logout
        if ('/logout' === $pathinfo) {
            return array('_route' => 'logout');
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
