import { GuideSection } from './GuideSection';
import { mainInfo, gproxyInfo, communityInfo } from './guideSections';

export function GuideSidebar() {
  return (
    <div className="space-y-6">
      <GuideSection
        title="Основная информация"
        items={mainInfo}
      />
      
      <GuideSection
        title="GProxy++"
        items={gproxyInfo}
      />
      
      <GuideSection
        title="Вклад сообщества"
        description="Как вы можете помочь проекту"
        items={communityInfo}
      />
    </div>
  );
}