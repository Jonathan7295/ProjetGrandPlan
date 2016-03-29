<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_19f5cfddc0c3c4b6c746a7a3cc3e02d9159b50dcd993a3fd265b2402a45125a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e6869387c40ad4c48c2712fe95a0eccfe03d1b1e5a2df48551608d01396d2975 = $this->env->getExtension("native_profiler");
        $__internal_e6869387c40ad4c48c2712fe95a0eccfe03d1b1e5a2df48551608d01396d2975->enter($__internal_e6869387c40ad4c48c2712fe95a0eccfe03d1b1e5a2df48551608d01396d2975_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
    </head>
    <body>
        <div>
            ";
        // line 8
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 9
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
                <a href=\"";
            // line 10
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                    ";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                </a>
            ";
        } else {
            // line 14
            echo "                <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
            ";
        }
        // line 16
        echo "        </div>

        ";
        // line 18
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 19
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 20
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 21
                    echo "                    <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                        ";
                    // line 22
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                    </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 25
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "        ";
        }
        // line 27
        echo "
        <div>
            ";
        // line 29
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 31
        echo "            ";
        $this->displayBlock('javascript', $context, $blocks);
        // line 33
        echo "        </div>
    </body>
</html>
";
        
        $__internal_e6869387c40ad4c48c2712fe95a0eccfe03d1b1e5a2df48551608d01396d2975->leave($__internal_e6869387c40ad4c48c2712fe95a0eccfe03d1b1e5a2df48551608d01396d2975_prof);

    }

    // line 29
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_feb903d75717cff8240fe99b7e7952ba675d6cd5bc6fdc604af67fe5ec3e5f6e = $this->env->getExtension("native_profiler");
        $__internal_feb903d75717cff8240fe99b7e7952ba675d6cd5bc6fdc604af67fe5ec3e5f6e->enter($__internal_feb903d75717cff8240fe99b7e7952ba675d6cd5bc6fdc604af67fe5ec3e5f6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 30
        echo "            ";
        
        $__internal_feb903d75717cff8240fe99b7e7952ba675d6cd5bc6fdc604af67fe5ec3e5f6e->leave($__internal_feb903d75717cff8240fe99b7e7952ba675d6cd5bc6fdc604af67fe5ec3e5f6e_prof);

    }

    // line 31
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_6e91fa7beebcea94c284802e0e5a50a942d1b97c5f37e90b72a6b5920d9c8bec = $this->env->getExtension("native_profiler");
        $__internal_6e91fa7beebcea94c284802e0e5a50a942d1b97c5f37e90b72a6b5920d9c8bec->enter($__internal_6e91fa7beebcea94c284802e0e5a50a942d1b97c5f37e90b72a6b5920d9c8bec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 32
        echo "            ";
        
        $__internal_6e91fa7beebcea94c284802e0e5a50a942d1b97c5f37e90b72a6b5920d9c8bec->leave($__internal_6e91fa7beebcea94c284802e0e5a50a942d1b97c5f37e90b72a6b5920d9c8bec_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 32,  129 => 31,  122 => 30,  116 => 29,  106 => 33,  103 => 31,  101 => 29,  97 => 27,  94 => 26,  88 => 25,  79 => 22,  74 => 21,  69 => 20,  64 => 19,  62 => 18,  58 => 16,  50 => 14,  44 => 11,  40 => 10,  35 => 9,  33 => 8,  24 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*     </head>*/
/*     <body>*/
/*         <div>*/
/*             {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*                 {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |*/
/*                 <a href="{{ path('fos_user_security_logout') }}">*/
/*                     {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}*/
/*                 </a>*/
/*             {% else %}*/
/*                 <a href="{{ path('fos_user_security_login') }}">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>*/
/*             {% endif %}*/
/*         </div>*/
/* */
/*         {% if app.request.hasPreviousSession %}*/
/*             {% for type, messages in app.session.flashbag.all() %}*/
/*                 {% for message in messages %}*/
/*                     <div class="flash-{{ type }}">*/
/*                         {{ message }}*/
/*                     </div>*/
/*                 {% endfor %}*/
/*             {% endfor %}*/
/*         {% endif %}*/
/* */
/*         <div>*/
/*             {% block fos_user_content %}*/
/*             {% endblock fos_user_content %}*/
/*             {% block javascript %}*/
/*             {% endblock javascript %}*/
/*         </div>*/
/*     </body>*/
/* </html>*/
/* */
