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
        $__internal_1bb802c2d77ac5690e7374b5728994be9cf9e6cd81ef0f9b03ea319ed84e0a36 = $this->env->getExtension("native_profiler");
        $__internal_1bb802c2d77ac5690e7374b5728994be9cf9e6cd81ef0f9b03ea319ed84e0a36->enter($__internal_1bb802c2d77ac5690e7374b5728994be9cf9e6cd81ef0f9b03ea319ed84e0a36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_1bb802c2d77ac5690e7374b5728994be9cf9e6cd81ef0f9b03ea319ed84e0a36->leave($__internal_1bb802c2d77ac5690e7374b5728994be9cf9e6cd81ef0f9b03ea319ed84e0a36_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_a8bc93d34ca0026e83216b1f87a163fbf8887b9f85d4073f8e74b517d9799751 = $this->env->getExtension("native_profiler");
        $__internal_a8bc93d34ca0026e83216b1f87a163fbf8887b9f85d4073f8e74b517d9799751->enter($__internal_a8bc93d34ca0026e83216b1f87a163fbf8887b9f85d4073f8e74b517d9799751_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_a8bc93d34ca0026e83216b1f87a163fbf8887b9f85d4073f8e74b517d9799751->leave($__internal_a8bc93d34ca0026e83216b1f87a163fbf8887b9f85d4073f8e74b517d9799751_prof);

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
