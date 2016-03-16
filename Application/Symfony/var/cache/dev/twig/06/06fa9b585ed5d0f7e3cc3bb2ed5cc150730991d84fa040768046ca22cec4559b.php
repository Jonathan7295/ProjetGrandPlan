<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_4eeae6278b2c4d170a2f39ed1c3f2b5ccb6abea6d95d2acde28cd08b286d9a0a extends Twig_Template
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
        $__internal_c2478c06beb9f99f9038914146f1690de100559298fce315c6db1fc94f29d566 = $this->env->getExtension("native_profiler");
        $__internal_c2478c06beb9f99f9038914146f1690de100559298fce315c6db1fc94f29d566->enter($__internal_c2478c06beb9f99f9038914146f1690de100559298fce315c6db1fc94f29d566_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_c2478c06beb9f99f9038914146f1690de100559298fce315c6db1fc94f29d566->leave($__internal_c2478c06beb9f99f9038914146f1690de100559298fce315c6db1fc94f29d566_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
