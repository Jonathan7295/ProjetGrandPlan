<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_ccbeb8372252bce02309926112624a13b91052f0ca7af518219ab76ac64b973b extends Twig_Template
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
        $__internal_179fb775825b48bd8bbc9497f4a768032463f2b5ebb6dd06dc98c9689be2a4d8 = $this->env->getExtension("native_profiler");
        $__internal_179fb775825b48bd8bbc9497f4a768032463f2b5ebb6dd06dc98c9689be2a4d8->enter($__internal_179fb775825b48bd8bbc9497f4a768032463f2b5ebb6dd06dc98c9689be2a4d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_179fb775825b48bd8bbc9497f4a768032463f2b5ebb6dd06dc98c9689be2a4d8->leave($__internal_179fb775825b48bd8bbc9497f4a768032463f2b5ebb6dd06dc98c9689be2a4d8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
