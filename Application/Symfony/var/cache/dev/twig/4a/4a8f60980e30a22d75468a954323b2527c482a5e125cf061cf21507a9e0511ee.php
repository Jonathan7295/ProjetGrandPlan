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
        $__internal_68a8a3128255402b8de6f6b74fa044c40529909ca56ad0f0be38d6930741ae76 = $this->env->getExtension("native_profiler");
        $__internal_68a8a3128255402b8de6f6b74fa044c40529909ca56ad0f0be38d6930741ae76->enter($__internal_68a8a3128255402b8de6f6b74fa044c40529909ca56ad0f0be38d6930741ae76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_68a8a3128255402b8de6f6b74fa044c40529909ca56ad0f0be38d6930741ae76->leave($__internal_68a8a3128255402b8de6f6b74fa044c40529909ca56ad0f0be38d6930741ae76_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2a83c44fd9b22b3563409444104d0bb9e71c2cce9f37c2d048a0bab70d7e9425 = $this->env->getExtension("native_profiler");
        $__internal_2a83c44fd9b22b3563409444104d0bb9e71c2cce9f37c2d048a0bab70d7e9425->enter($__internal_2a83c44fd9b22b3563409444104d0bb9e71c2cce9f37c2d048a0bab70d7e9425_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2a83c44fd9b22b3563409444104d0bb9e71c2cce9f37c2d048a0bab70d7e9425->leave($__internal_2a83c44fd9b22b3563409444104d0bb9e71c2cce9f37c2d048a0bab70d7e9425_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_735eba4828ef77941a3fe302ab2fb9a924286de461ebd5258e92b23bc2b22f9c = $this->env->getExtension("native_profiler");
        $__internal_735eba4828ef77941a3fe302ab2fb9a924286de461ebd5258e92b23bc2b22f9c->enter($__internal_735eba4828ef77941a3fe302ab2fb9a924286de461ebd5258e92b23bc2b22f9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_735eba4828ef77941a3fe302ab2fb9a924286de461ebd5258e92b23bc2b22f9c->leave($__internal_735eba4828ef77941a3fe302ab2fb9a924286de461ebd5258e92b23bc2b22f9c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e8ac7ce7363deea6be0ff7e5a2f2a90a2bedbe33d739b3a0390cee23a91e9240 = $this->env->getExtension("native_profiler");
        $__internal_e8ac7ce7363deea6be0ff7e5a2f2a90a2bedbe33d739b3a0390cee23a91e9240->enter($__internal_e8ac7ce7363deea6be0ff7e5a2f2a90a2bedbe33d739b3a0390cee23a91e9240_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e8ac7ce7363deea6be0ff7e5a2f2a90a2bedbe33d739b3a0390cee23a91e9240->leave($__internal_e8ac7ce7363deea6be0ff7e5a2f2a90a2bedbe33d739b3a0390cee23a91e9240_prof);

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
