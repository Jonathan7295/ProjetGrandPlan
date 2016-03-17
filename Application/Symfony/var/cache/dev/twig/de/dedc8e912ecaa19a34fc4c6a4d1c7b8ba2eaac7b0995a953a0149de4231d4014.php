<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_b84c5d0e10d7dbdc71c4b72815f1ca7b82de517ed06e9bd45c4022183e90e706 extends Twig_Template
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
        $__internal_4f745042da2dad50b43b0d5962937d535bb8d69f5f98d6d7f1cd0192905c3493 = $this->env->getExtension("native_profiler");
        $__internal_4f745042da2dad50b43b0d5962937d535bb8d69f5f98d6d7f1cd0192905c3493->enter($__internal_4f745042da2dad50b43b0d5962937d535bb8d69f5f98d6d7f1cd0192905c3493_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_4f745042da2dad50b43b0d5962937d535bb8d69f5f98d6d7f1cd0192905c3493->leave($__internal_4f745042da2dad50b43b0d5962937d535bb8d69f5f98d6d7f1cd0192905c3493_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
