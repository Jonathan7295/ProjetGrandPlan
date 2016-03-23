<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_66e661a7df72b3be56b54b46b5d5d44043f4da5eb8ace71da337d7e597b57501 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_83dc3083107b5c7ce7c6b9879d51452156da35162b421bf57c6e3bfbbef67570 = $this->env->getExtension("native_profiler");
        $__internal_83dc3083107b5c7ce7c6b9879d51452156da35162b421bf57c6e3bfbbef67570->enter($__internal_83dc3083107b5c7ce7c6b9879d51452156da35162b421bf57c6e3bfbbef67570_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_83dc3083107b5c7ce7c6b9879d51452156da35162b421bf57c6e3bfbbef67570->leave($__internal_83dc3083107b5c7ce7c6b9879d51452156da35162b421bf57c6e3bfbbef67570_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
