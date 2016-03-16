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
        $__internal_cbf6c68c2f5bb761ccefbc60624699e1fe9e22dc64f1f6e1ec9f5758c74c81d5 = $this->env->getExtension("native_profiler");
        $__internal_cbf6c68c2f5bb761ccefbc60624699e1fe9e22dc64f1f6e1ec9f5758c74c81d5->enter($__internal_cbf6c68c2f5bb761ccefbc60624699e1fe9e22dc64f1f6e1ec9f5758c74c81d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cbf6c68c2f5bb761ccefbc60624699e1fe9e22dc64f1f6e1ec9f5758c74c81d5->leave($__internal_cbf6c68c2f5bb761ccefbc60624699e1fe9e22dc64f1f6e1ec9f5758c74c81d5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f7c674e57baca1d08999a68419870538787505809249a866d22eb97a62565ea7 = $this->env->getExtension("native_profiler");
        $__internal_f7c674e57baca1d08999a68419870538787505809249a866d22eb97a62565ea7->enter($__internal_f7c674e57baca1d08999a68419870538787505809249a866d22eb97a62565ea7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f7c674e57baca1d08999a68419870538787505809249a866d22eb97a62565ea7->leave($__internal_f7c674e57baca1d08999a68419870538787505809249a866d22eb97a62565ea7_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9581496434bac9b716a1082cee0c0a04fbd898d9e8828b766a378d9b45929394 = $this->env->getExtension("native_profiler");
        $__internal_9581496434bac9b716a1082cee0c0a04fbd898d9e8828b766a378d9b45929394->enter($__internal_9581496434bac9b716a1082cee0c0a04fbd898d9e8828b766a378d9b45929394_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9581496434bac9b716a1082cee0c0a04fbd898d9e8828b766a378d9b45929394->leave($__internal_9581496434bac9b716a1082cee0c0a04fbd898d9e8828b766a378d9b45929394_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d4beab9db28cc20b3689751fcaa90e16cb7934b743094d5ae5edd213d1c6629f = $this->env->getExtension("native_profiler");
        $__internal_d4beab9db28cc20b3689751fcaa90e16cb7934b743094d5ae5edd213d1c6629f->enter($__internal_d4beab9db28cc20b3689751fcaa90e16cb7934b743094d5ae5edd213d1c6629f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d4beab9db28cc20b3689751fcaa90e16cb7934b743094d5ae5edd213d1c6629f->leave($__internal_d4beab9db28cc20b3689751fcaa90e16cb7934b743094d5ae5edd213d1c6629f_prof);

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
