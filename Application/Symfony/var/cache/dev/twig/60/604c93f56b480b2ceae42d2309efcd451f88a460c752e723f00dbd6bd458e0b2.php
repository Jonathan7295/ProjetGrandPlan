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
        $__internal_b81f0f23722b3d5bba780905b3e11f46e08a2515658734f22b3ea52ac8be366b = $this->env->getExtension("native_profiler");
        $__internal_b81f0f23722b3d5bba780905b3e11f46e08a2515658734f22b3ea52ac8be366b->enter($__internal_b81f0f23722b3d5bba780905b3e11f46e08a2515658734f22b3ea52ac8be366b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_b81f0f23722b3d5bba780905b3e11f46e08a2515658734f22b3ea52ac8be366b->leave($__internal_b81f0f23722b3d5bba780905b3e11f46e08a2515658734f22b3ea52ac8be366b_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_836f1ba28d0c6dfad2ad4a6ba1032dcc8451dcd32abd4d5c5323d282d3fa6dd9 = $this->env->getExtension("native_profiler");
        $__internal_836f1ba28d0c6dfad2ad4a6ba1032dcc8451dcd32abd4d5c5323d282d3fa6dd9->enter($__internal_836f1ba28d0c6dfad2ad4a6ba1032dcc8451dcd32abd4d5c5323d282d3fa6dd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_836f1ba28d0c6dfad2ad4a6ba1032dcc8451dcd32abd4d5c5323d282d3fa6dd9->leave($__internal_836f1ba28d0c6dfad2ad4a6ba1032dcc8451dcd32abd4d5c5323d282d3fa6dd9_prof);

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
