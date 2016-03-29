<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_3d7f17f694e94bd4fbf040e6968a63ed4988f7189fd813e436065f7ba39c0043 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_c0eb2a2cd53755aab49e75746e57b24416a0aab27640395cf91ccf89504f2333 = $this->env->getExtension("native_profiler");
        $__internal_c0eb2a2cd53755aab49e75746e57b24416a0aab27640395cf91ccf89504f2333->enter($__internal_c0eb2a2cd53755aab49e75746e57b24416a0aab27640395cf91ccf89504f2333_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c0eb2a2cd53755aab49e75746e57b24416a0aab27640395cf91ccf89504f2333->leave($__internal_c0eb2a2cd53755aab49e75746e57b24416a0aab27640395cf91ccf89504f2333_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b109d74302cb0c9fb63eada26092b3ec1b35f9c6d2f0d94763a6958c1745481f = $this->env->getExtension("native_profiler");
        $__internal_b109d74302cb0c9fb63eada26092b3ec1b35f9c6d2f0d94763a6958c1745481f->enter($__internal_b109d74302cb0c9fb63eada26092b3ec1b35f9c6d2f0d94763a6958c1745481f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_b109d74302cb0c9fb63eada26092b3ec1b35f9c6d2f0d94763a6958c1745481f->leave($__internal_b109d74302cb0c9fb63eada26092b3ec1b35f9c6d2f0d94763a6958c1745481f_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c8641c827ca2c780ce02ad755a8ca50079f93bebf3d09fe17ef268e6b8744f5f = $this->env->getExtension("native_profiler");
        $__internal_c8641c827ca2c780ce02ad755a8ca50079f93bebf3d09fe17ef268e6b8744f5f->enter($__internal_c8641c827ca2c780ce02ad755a8ca50079f93bebf3d09fe17ef268e6b8744f5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_c8641c827ca2c780ce02ad755a8ca50079f93bebf3d09fe17ef268e6b8744f5f->leave($__internal_c8641c827ca2c780ce02ad755a8ca50079f93bebf3d09fe17ef268e6b8744f5f_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cd33826a026b06b319574c85e0c55270b96d1215e537fb2dac0a6dedd019f8ff = $this->env->getExtension("native_profiler");
        $__internal_cd33826a026b06b319574c85e0c55270b96d1215e537fb2dac0a6dedd019f8ff->enter($__internal_cd33826a026b06b319574c85e0c55270b96d1215e537fb2dac0a6dedd019f8ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_cd33826a026b06b319574c85e0c55270b96d1215e537fb2dac0a6dedd019f8ff->leave($__internal_cd33826a026b06b319574c85e0c55270b96d1215e537fb2dac0a6dedd019f8ff_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
