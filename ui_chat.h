/********************************************************************************
** Form generated from reading UI file 'chat.ui'
**
** Created by: Qt User Interface Compiler version 6.6.1
**
** WARNING! All changes made in this file will be lost when recompiling UI file!
********************************************************************************/

#ifndef UI_CHAT_H
#define UI_CHAT_H

#include <QtCore/QVariant>
#include <QtWidgets/QApplication>
#include <QtWidgets/QDialog>

QT_BEGIN_NAMESPACE

class Ui_chat
{
public:

    void setupUi(QDialog *chat)
    {
        if (chat->objectName().isEmpty())
            chat->setObjectName("chat");
        chat->resize(400, 300);

        retranslateUi(chat);

        QMetaObject::connectSlotsByName(chat);
    } // setupUi

    void retranslateUi(QDialog *chat)
    {
        chat->setWindowTitle(QCoreApplication::translate("chat", "Dialog", nullptr));
    } // retranslateUi

};

namespace Ui {
    class chat: public Ui_chat {};
} // namespace Ui

QT_END_NAMESPACE

#endif // UI_CHAT_H
