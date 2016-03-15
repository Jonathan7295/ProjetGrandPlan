<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_a02bae778149ab14970111cd5346a922b81613d98bb54f3fb24dc16fbcbed60b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6979bea2681247bf11edbd165b14588911294f75e062675eb032f931fd2f8056 = $this->env->getExtension("native_profiler");
        $__internal_6979bea2681247bf11edbd165b14588911294f75e062675eb032f931fd2f8056->enter($__internal_6979bea2681247bf11edbd165b14588911294f75e062675eb032f931fd2f8056_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_6979bea2681247bf11edbd165b14588911294f75e062675eb032f931fd2f8056->leave($__internal_6979bea2681247bf11edbd165b14588911294f75e062675eb032f931fd2f8056_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_a03f809b25ea0fd835be3a279bf5d661d0f6b44b91ccf2a6f2a2665b9c922476 = $this->env->getExtension("native_profiler");
        $__internal_a03f809b25ea0fd835be3a279bf5d661d0f6b44b91ccf2a6f2a2665b9c922476->enter($__internal_a03f809b25ea0fd835be3a279bf5d661d0f6b44b91ccf2a6f2a2665b9c922476_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_a03f809b25ea0fd835be3a279bf5d661d0f6b44b91ccf2a6f2a2665b9c922476->leave($__internal_a03f809b25ea0fd835be3a279bf5d661d0f6b44b91ccf2a6f2a2665b9c922476_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
