<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_3d8d2eda71b975f68477ffb4a93549dcc6aed5d04ffb24d6c294f6e16ef2f515 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8378479036fdfb79e0b6b709e9ec774f84b5afee72f36ded1e003de8c62b679e = $this->env->getExtension("native_profiler");
        $__internal_8378479036fdfb79e0b6b709e9ec774f84b5afee72f36ded1e003de8c62b679e->enter($__internal_8378479036fdfb79e0b6b709e9ec774f84b5afee72f36ded1e003de8c62b679e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8378479036fdfb79e0b6b709e9ec774f84b5afee72f36ded1e003de8c62b679e->leave($__internal_8378479036fdfb79e0b6b709e9ec774f84b5afee72f36ded1e003de8c62b679e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_904a769dbe2d9a0d1f5ba7fbf08d2923ad2a2331d26d8451ebe0305f0df770fd = $this->env->getExtension("native_profiler");
        $__internal_904a769dbe2d9a0d1f5ba7fbf08d2923ad2a2331d26d8451ebe0305f0df770fd->enter($__internal_904a769dbe2d9a0d1f5ba7fbf08d2923ad2a2331d26d8451ebe0305f0df770fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_904a769dbe2d9a0d1f5ba7fbf08d2923ad2a2331d26d8451ebe0305f0df770fd->leave($__internal_904a769dbe2d9a0d1f5ba7fbf08d2923ad2a2331d26d8451ebe0305f0df770fd_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_231e63333695f16ce4dc00d1667f5916a2d1354e2499c3f322ca15fd5812f945 = $this->env->getExtension("native_profiler");
        $__internal_231e63333695f16ce4dc00d1667f5916a2d1354e2499c3f322ca15fd5812f945->enter($__internal_231e63333695f16ce4dc00d1667f5916a2d1354e2499c3f322ca15fd5812f945_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_231e63333695f16ce4dc00d1667f5916a2d1354e2499c3f322ca15fd5812f945->leave($__internal_231e63333695f16ce4dc00d1667f5916a2d1354e2499c3f322ca15fd5812f945_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_745c6d29207b229d92e30df94a5a673391a457e437c823e0a276a4b9a8b296b5 = $this->env->getExtension("native_profiler");
        $__internal_745c6d29207b229d92e30df94a5a673391a457e437c823e0a276a4b9a8b296b5->enter($__internal_745c6d29207b229d92e30df94a5a673391a457e437c823e0a276a4b9a8b296b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_745c6d29207b229d92e30df94a5a673391a457e437c823e0a276a4b9a8b296b5->leave($__internal_745c6d29207b229d92e30df94a5a673391a457e437c823e0a276a4b9a8b296b5_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
