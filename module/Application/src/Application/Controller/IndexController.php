<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use JS\Validator\Cnpj;
use JS\Validator\Cpf;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        $messagesCpf = [];
        $messagesCnpj = [];
        if ($this->getRequest()->isPost()) {
            $dataCpf = $this->params()->fromPost('cpf');
            $dataCnpj = $this->params()->fromPost('cnpj');

            $cpfValidator = new Cpf(['valid_if_empty' => true]);
            $cnpjValidator = new Cnpj(['valid_if_empty' => true]);

            $cpfValidator->isValid($dataCpf);
            $cnpjValidator->isValid($dataCnpj);

            $messagesCpf = $cpfValidator->getMessages();
            $messagesCnpj = $cnpjValidator->getMessages();
        }
        return new ViewModel([
            'messagesCpf' => $messagesCpf,
            'messagesCnpj' => $messagesCnpj
        ]);
    }
}
