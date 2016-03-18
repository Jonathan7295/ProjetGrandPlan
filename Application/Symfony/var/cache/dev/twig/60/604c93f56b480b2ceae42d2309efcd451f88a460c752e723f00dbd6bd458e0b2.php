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
        $__internal_9c276b6c485989062a8fe876a31599ac39463ad1adb36696e69596c54fb21ae9 = $this->env->getExtension("native_profiler");
        $__internal_9c276b6c485989062a8fe876a31599ac39463ad1adb36696e69596c54fb21ae9->enter($__internal_9c276b6c485989062a8fe876a31599ac39463ad1adb36696e69596c54fb21ae9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_9c276b6c485989062a8fe876a31599ac39463ad1adb36696e69596c54fb21ae9->leave($__internal_9c276b6c485989062a8fe876a31599ac39463ad1adb36696e69596c54fb21ae9_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_64fb166357c19091303798e48603445f6a7f04129a0127310da6fe8652d21ea8 = $this->env->getExtension("native_profiler");
        $__internal_64fb166357c19091303798e48603445f6a7f04129a0127310da6fe8652d21ea8->enter($__internal_64fb166357c19091303798e48603445f6a7f04129a0127310da6fe8652d21ea8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_64fb166357c19091303798e48603445f6a7f04129a0127310da6fe8652d21ea8->leave($__internal_64fb166357c19091303798e48603445f6a7f04129a0127310da6fe8652d21ea8_prof);

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
