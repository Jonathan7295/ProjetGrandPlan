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
        $__internal_f5c2f34b2a4ef798015b25ea361e63a721411b9da8a2a80e717b7d5b52b839b3 = $this->env->getExtension("native_profiler");
        $__internal_f5c2f34b2a4ef798015b25ea361e63a721411b9da8a2a80e717b7d5b52b839b3->enter($__internal_f5c2f34b2a4ef798015b25ea361e63a721411b9da8a2a80e717b7d5b52b839b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_f5c2f34b2a4ef798015b25ea361e63a721411b9da8a2a80e717b7d5b52b839b3->leave($__internal_f5c2f34b2a4ef798015b25ea361e63a721411b9da8a2a80e717b7d5b52b839b3_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_52c209db65c19b9331b86164cbbc9d565ad055455ade9126763a7fd72a720fce = $this->env->getExtension("native_profiler");
        $__internal_52c209db65c19b9331b86164cbbc9d565ad055455ade9126763a7fd72a720fce->enter($__internal_52c209db65c19b9331b86164cbbc9d565ad055455ade9126763a7fd72a720fce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_52c209db65c19b9331b86164cbbc9d565ad055455ade9126763a7fd72a720fce->leave($__internal_52c209db65c19b9331b86164cbbc9d565ad055455ade9126763a7fd72a720fce_prof);

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
